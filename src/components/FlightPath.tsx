import { useEffect, useState } from "react";
import PathSegment from "./PathSegment";
import Earth from "./Earth";
import Moon from "./Moon";
import Ship from "./Ship";
import type { Scene } from "../types";
interface Props {
  className: string;
  scrollProgress: number;
}

const FlightPath = ({ className, scrollProgress }: Props) => {
  const [currentSegment, setCurrentSegment] = useState<number>(0);
  const [scale, setScale] = useState<number>(2.5);
  const [x, setX] = useState<number>(0);
  const [y, setY] = useState<number>(850);
  const [point, setPoint] = useState<SVGPoint | undefined>();
  const [scene, setScene] = useState<Scene>("earth");

  useEffect(() => {
    if (scrollProgress >= 1) {
      setScale(1);
      setY(0);
      setX(0);
    } else {
      setScale(2.5);
      setY(850);
      setX(0);
    }
    const floor = Math.floor(scrollProgress);
    if (floor === 3 && scrollProgress >= 3.5) {
      setCurrentSegment(3.5);
    } else {
      setCurrentSegment(floor);
    }
  }, [scrollProgress]);

  useEffect(() => {
    switch (currentSegment) {
      case 0:
        setScene("earth");
        break;
      case 1:
      case 2:
        setScene("ascent");
        break;
      case 3:
        setScene("moon1");
        break;
      case 3.5:
        setScene("moon2");
        break;
      case 4:
      case 5:
        setScene("decent");
        break;
      case 6:
        setScene("home");
        break;
      default:
        setScene("earth");
        break;
    }
  }, [currentSegment, scrollProgress]);

  return (
    <div className={className}>
      <div>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 932.48 1663.2"
          className="h-screen w-[50vw] mx-auto transition-all duration-[1250ms] ease-in-out "
          transform={`translate(${x} ${y}) scale(${scale})`}
        >
          <g id="ascent-path">
            <Earth />
            <Moon />
            <PathSegment
              id="decent2"
              shape="M350.8,1462.2c0-2.6,0-5.2,0-7.7,4-86.3,62.2-206,119.8-341.3,80.8-189.9,169.8-419,194.2-590.1,15.1-106.2,20.7-156.6,12.8-217.2-15.8-121-87.3-186.6-140.5-205.7-14.1-5.1-80.8-19.8-93.2,37.8"
              segment={5}
              scrollProgress={scrollProgress}
              setPoint={setPoint}
              className=""
            />
            <PathSegment
              id="decent1"
              shape="M467.9,1410.5c0-30.5,65.1.8,72.6,52.9.7,4.6.9,9.3.6,14.1-3,48.2-38.4,69.3-73.2,73-37.2,4-87.9-23.9-93.6-80.7-.2-2.2-.4-4.3-.4-6.5h0c-.8-23.8,7.4-43.8,20.6-59.3,18.4-21.7,46.6-34.4,73.4-36.1,47.6-3,81.9,30.6,91.3,47.8,7.2,13,13.5,30.8,13.5,46.5h0c0,42.9-24.1,78.3-62.1,98.5-15.1,7.9-58.9,23.2-105.8-1.9-39.2-20.9-53.3-62.4-54-96.6"
              segment={4}
              scrollProgress={scrollProgress}
              setPoint={setPoint}
              className=""
            />
            <PathSegment
              id="ascent2"
              segment={2}
              className={scene === "ascent" ? "opacity-100" : "opacity-20"}
              scrollProgress={scrollProgress}
              setPoint={setPoint}
              shape="M587.3,1463.2c-1.2,52.9-36.2,85.4-62.6,95.5-88.5,33.8-159.7-26.3-160.7-95.5v-1.5c0-57.1,47-103.1,104.2-103.1s104.2,46.7,104.2,104.2v.4c-.2,46.1-33,88.4-72,97.7-70.4,16.7-125.9-35.8-115.9-97.7.7-4,1.6-8.1,2.8-12.2,10.5-34.9,30.5-43.7,43-47.2,22.8-6.4,25.4,10.1,25.4,10.1"
            />
            <PathSegment
              id="ascent1"
              segment={1}
              className={scene === "ascent" ? "opacity-100" : "opacity-20"}
              scrollProgress={scrollProgress}
              setPoint={setPoint}
              shape="M543,236.3c-71.5,32-138.6,123.9-90.9,176.2,37.7,41.2,109,6,109,6,54.3-31.3,91.7-87.9,94.7-154.4,4.9-107.9-81-197.4-189-197.9-93.9,0-178.5,68.3-192,189.6-7,62.3-9,167.5,6,273.7,24.6,173.6,105.9,393.1,185,583.7,55.6,134,117.5,255,121.4,341.3,0,2.9.2,5.8,0,8.6"
            />
            {point && <Ship point={point} scene={scene} />}
          </g>
          {/* <MoonSurface /> */}
        </svg>
        <div
          className={`absolute top-0 -right-6 w-[50vw] h-screen bg-cover bg-center transition-opacity duration-1000 opacity-${scene.includes("moon") ? 100 : 0}`}
          style={{ backgroundImage: "url(/images/moon-surface.png" }}
        ></div>
      </div>
    </div>
  );
};

export default FlightPath;
