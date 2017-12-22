import Component from '@glimmer/component';
import { HTMLElement } from '@glimmer/interfaces/dist/types/lib/dom/simple';

export default class Apollo15FlightPath extends Component {

  pathLength: number;
  flightPath: any;
  csm: any;

  constructor(options) {
    super(options);
    this.loadPath();
  }

  loadPath() {
    // Get a reference to the <path>
    this.flightPath = document.querySelector('#flight-path');
    this.csm = document.querySelector('#csm');

    // Get length of this.flightPath... ~577px in this case
    this.pathLength = this.flightPath.getTotalLength();

    // Make very long dashes (the length of the path itself)
    this.flightPath.style.strokeDasharray = this.pathLength + ' ' + this.pathLength;

    // Offset the dashes so the it appears hidden entirely
    this.flightPath.style.strokeDashoffset = this.pathLength;

    // Jake Archibald says so
    // https://jakearchibald.com/2013/animated-line-drawing-svg/
    this.flightPath.getBoundingClientRect();

    // When the page scrolls...
    window.addEventListener("scroll", (e) => {

      // What % down is it?
      // https://stackoverflow.com/questions/2387136/cross-browser-method-to-determine-vertical-scroll-percentage-in-javascript/2387222#2387222
      // Had to try three or four differnet methods here. Kind of a cross-browser nightmare.
      var scrollPercentage = (document.documentElement.scrollTop + document.body.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight);

      // Length to offset the dashes
      var drawLength = this.pathLength * scrollPercentage;
      let pxcords = this.flightPath.getPointAtLength(drawLength).matrixTransform(this.flightPath.getScreenCTM());
      this.csm.style.transform = `translate(${pxcords.x}px, ${pxcords.y}px)`;

      // Draw in reverse
      this.flightPath.style.strokeDashoffset = this.pathLength - drawLength;

      // When complete, remove the dash array, otherwise shape isn't quite sharp
      // Accounts for fuzzy math
      if (scrollPercentage >= 0.99) {
        this.flightPath.style.strokeDasharray = "none";

      } else {
        this.flightPath.style.strokeDasharray = this.pathLength + ' ' + this.pathLength;
      }
    });
  }
}
