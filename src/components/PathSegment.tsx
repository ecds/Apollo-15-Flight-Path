import { useEffect, useRef, useState } from "react";
interface Props {
  shape: string;
  segment: number;
  scrollProgress: number;
  id: string;
  className: string;
  setPoint: any;
}

const PathSegment = ({
  shape,
  segment,
  scrollProgress,
  id,
  className,
  setPoint,
}: Props) => {
  const pathRef = useRef<SVGPathElement>(null);
  const [pathLength, setPathLength] = useState<number>(0);
  const [dashOffset, setDashOffset] = useState<number>(0);

  useEffect(() => {
    if (!pathRef.current) return;
    setPathLength(pathRef.current.getTotalLength());
    setDashOffset(pathRef.current.getTotalLength());
  }, []);

  useEffect(() => {
    const current = Math.floor(scrollProgress);
    if (current < segment) {
      setDashOffset(pathLength);
    } else if (current > segment) {
      setDashOffset(0);
    } else if (current === segment) {
      const drawLength = (scrollProgress % 1) * pathLength;
      setDashOffset(pathLength - drawLength);
      setPoint(
        pathRef.current?.getPointAtLength((scrollProgress % 1) * pathLength),
      );
    }
  }, [pathLength, scrollProgress]);

  return (
    <path
      id={id}
      className={`${className} transition-opacity duration-1000`}
      ref={pathRef}
      fill="none"
      stroke="white"
      strokeWidth={5}
      d={shape}
      style={{
        strokeDashoffset: `${dashOffset}px`,
        strokeDasharray: `${pathLength}px`,
      }}
    />
  );
};

export default PathSegment;
