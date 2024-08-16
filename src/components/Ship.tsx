import { useEffect, useState } from "react";
import type { Scene } from "../types";

interface Props {
  point: SVGPoint;
  scene: Scene;
}

const Ship = ({ point, scene }: Props) => {
  const [xOffset, setXOffset] = useState<number>(100);
  const [yOffset, setYOffset] = useState<number>(5);
  const [rotate, setRotate] = useState<number>(0);
  const [opacity, setOpacity] = useState<number>(0);
  const [currentShip, setCurrentShip] = useState<string>(
    "/images/ascent-vehicle.png",
  );

  useEffect(() => {
    if (scene === "ascent" || scene === "moon1") {
      setCurrentShip("/images/ascent-vehicle.png");
      setXOffset(100);
      setYOffset(5);
      setRotate(0);
    } else if (scene === "decent" || scene === "home" || scene === "moon2") {
      setCurrentShip("/images/decent-vehicle.png");
      setXOffset(-100);
      setYOffset(-200);
      setRotate(180);
    }

    if (scene === "earth" || scene.includes("moon") || scene === "home") {
      setOpacity(0);
    } else {
      setOpacity(1);
    }
  }, [scene]);

  return (
    <image
      id="ascent-ship"
      width={100}
      height={100}
      transform={`translate(${point.x - xOffset},${point.y - yOffset} ) scale(2) rotate(${rotate})`}
      opacity={opacity}
      className="transition-opacity duration-1000"
      href={currentShip}
    ></image>
  );
};

export default Ship;
