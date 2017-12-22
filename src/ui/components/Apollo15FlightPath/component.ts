import Component from '@glimmer/component';
import createCanvas from '../../../utils/create-canvas';
import { HTMLElement } from '@glimmer/interfaces/dist/types/lib/dom/simple';
export default class Apollo15FlightPath extends Component {

  spacefile: string;
  csmfile: string;
  body: HTMLBodyElement;
  canvas: HTMLCanvasElement;
  ctx: CanvasRenderingContext2D;
  state: {};
  mapSrc: null;
  spaceSVG: any;
  csmSVG: any;
  domurl: any;
  ox: number;
  oy: number;
  pathLength: number;
  l: number;
  searchDl: number;
  point: SVGPoint;
  flightPathElement: any;
  attr: any;
  img: any;
  startX: number;
  startY: number;
  mouseX: number;
  mouseY: number;
  canvasOffset: number;
  offsetX: number;
  offsetY: number;
  isDown: boolean;
  points: any;
  cmsSVG: any;
  cmsURL: any;
  path: any;


  constructor(options) {
    super(options);
    this.spacefile = '/images/space.svg';
    this.csmfile = '/images/cms.svg';
    this.body = document.getElementsByTagName('body')[0];
    this.domurl = window.URL || window;
    this.ox = 10;
    this.oy = 220;
    let width = window.innerWidth;
    let height = window.innerHeight;
    this.canvas = createCanvas(width, height);
    this.ctx = this.canvas.getContext('2d');
    this.ctx.fillStyle='#fff';
    this.ctx.fillRect(0, 0, width, height);
    this.body.appendChild(this.canvas);
    this.loadPath();
    this.loadCMS();
    this.l = 0;
    this.searchDl = 1;
    this.canvasOffset = this.canvas.offsetHeight;
    this.offsetX = this.canvas.offsetLeft;
    this.offsetY = this.canvas.offsetTop;

    this.canvas.addEventListener('mousedown', (event) => {
      this.handleMouseDown(event);
    });

    this.canvas.addEventListener('mousemove', (event) => {
      this.handleMouseMove(event);
    });

    this.canvas.addEventListener('mouseup', (event) => {
      this.handleMouseUp(event);
    });

    this.canvas.addEventListener('mouseout', (event) => {
      this.handleMouseOut(event);
    });
  }

  async loadPath() {
      let request = await fetch(this.spacefile);
      let body = await request.text();
      this.spaceSVG = Array.from(
        new DOMParser()
          .parseFromString(body,'image/svg+xml')
          .childNodes).filter(node => {
            let tag = node.tagName;
            if(typeof tag=='undefined') return false
            return tag.toLowerCase()=='svg'
          })[0]

    this.flightPathElement = this.spaceSVG.querySelector('#flight-path').lastElementChild;
    this.path = this.flightPathElement.attributes['d'].value;
    this.point = this.flightPathElement.getPointAtLength(this.l);
    this.pathLength = this.flightPathElement.getTotalLength();

    let flightPath = new Path2D(this.path);
    this.ctx.stroke(flightPath);

    let waypointElements = this.spaceSVG.querySelectorAll('.waypoint');
    this.points = [];
    waypointElements.forEach((point) => {
      this.points.push(
        {
          x: point.cx.baseVal.value,
          y: point.cy.baseVal.value
        }
      )
    });
    console.log(this.points);
  }

  async loadCMS() {
    let request = await fetch(this.csmfile);
    let body = await request.text();

    this.img = new Image();
    this.cmsSVG = new Blob([body], {type: 'image/svg+xml'});
    this.cmsURL = this.domurl.createObjectURL(this.cmsSVG);

    this.drawCSM();
 }

  drawCSM() {
   console.log(this.ctx)
   console.log([this.img])
    this.img.remove();
    this.img.onload = () => {
      this.ctx.drawImage(this.img, this.ox, this.oy);
    // this.domurl.revokeObjectURL(this.cmsURL);
    }

    this.img.src = this.cmsURL;
  }

  handleMouseDown(event) {
    console.log(event);
    event.preventDefault();
    this.startX = event.clientX - this.offsetX;
    this.startY = event.clientY - this.offsetY;

    // Put your mousedown stuff here
    this.isDown = true;
  }

  handleMouseUp(event) {
    event.preventDefault();
    this.mouseX = event.clientX - this.offsetX;
    this.mouseY = event.clientY - this.offsetY;

    // Put your mouseOut stuff here
    this.isDown = false;
  }

  handleMouseOut(event) {
    event.preventDefault();
    this.mouseX = event.clientX - this.offsetX;
    this.mouseY = event.clientY - this.offsetY;

    // Put your mouseOut stuff here
    this.isDown = false;
  }

  handleMouseMove(event) {
    if (!this.isDown) {
        return;
    }
    event.preventDefault();
    this.mouseX = event.clientX - this.offsetX;
    this.mouseY = event.clientY - this.offsetY;
    console.log(this.mouseX)
    console.log(this.mouseY)

    // var minDistance = 1000;
    // var minPoint = -1;
    // for (var i = 0; i < this.points.length; i++) {
    //     var pt = this.points[i];
    //     var dx = this.mouseX - pt.x;
    //     var dy = this.mouseY - pt.y;
    //     var distance = Math.sqrt(dx * dx + dy * dy);
    //     if (distance < minDistance) {
    //         minDistance = distance;
    //         this.ox = pt.x - this.img.width / 2;
    //         this.oy = pt.y - this.img.height / 2;
    //     }
    // }
  }

  // move() {
  //   console.log('hi');
  //   this.ox = 400;
  //   this.oy = 400;

  //   this.drawCSM();
  // }

  // gradSearch() {
  //   let l0 = this.l + this.pathLength;
  //   let l1 = l0,
  //       pt = {x: this.ox +}
  //       dist0 = this.dist(this.path.getPointAtLength(l0 % this.pathLength), pt),
  //       dist1,
  //       searchDir;

  //   if (this.dist(this.path.getPointAtLength((l0 - searchDl) % totLen), pt) >
  //      dist(p.getPointAtLength((l0 + searchDl) % totLen), pt)) {
  //       searchDir = searchDl;
  //   } else {
  //       searchDir = -searchDl;
  //   }

  //   l1 += searchDir;
  //   dist1 = dist(p.getPointAtLength(l1 % totLen), pt);
  //   while (dist1 < dist0) {
  //       dist0 = dist1;
  //       l1 += searchDir;
  //       dist1 = dist(p.getPointAtLength(l1 % totLen), pt);
  //   }
  //   l1 -= searchDir;

  //   return (l1 % totLen);
  // }

  // dist = function (pt1, pt2) {
  //   var dx = pt1.x - pt2.x;
  //   var dy = pt1.y - pt2.y;
  //   return Math.sqrt(dx * dx + dy * dy);
  // }
}
