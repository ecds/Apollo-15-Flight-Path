import { useEffect, useRef, useState } from "react";
import scrollama from "scrollama";
import FlightPath from "./FlightPath";
import { segments } from "./Segments";
import { useResizeObserver } from "../hooks";
import type { ScrollamaInstance } from "scrollama";
// import { Link } from "./Layout";

const Scrollytell = () => {
  const scrollerRef = useRef<ScrollamaInstance | undefined>(undefined);
  const [scrollProgress, setScrollProgress] = useState<number>(0.0);
  const [setupFailed, setSetupFailed] = useState<boolean>(false);
  const [shouldRetry, setShouldRetry] = useState<boolean>(false);
  const { documentSize } = useResizeObserver();
  const steps = useRef<HTMLDivElement>(null);

  useEffect(() => {
    if (
      steps?.current?.children.length !== segments.length ||
      scrollerRef.current
    )
      return;
    try {
      scrollerRef.current = scrollama();
      scrollerRef.current
        .setup({
          step: ".step",
          progress: true,
        })
        .onStepProgress(({ index, progress }) => {
          setScrollProgress(index + progress);
        });
      setSetupFailed(false);
    } catch (error) {
      scrollerRef.current = undefined;
      setSetupFailed(true);
    }

    return () => {
      scrollerRef.current?.destroy();
      scrollerRef.current = undefined;
    };
  }, [parent, steps, segments, shouldRetry]);

  useEffect(() => {
    // Mostly a bug when navigating from error page.
    setShouldRetry(setupFailed);
  }, [setupFailed]);

  useEffect(() => {
    try {
      scrollerRef.current?.resize();
    } catch (error) {
      return;
    }
  }, [documentSize]);

  return (
    <section className="flex flex-col md:flex-row justify-between">
      <FlightPath
        className="sticky p-8 md:p-0 top-0 h-screen mt-16 mr-6 bias-full w-full md:bias-1/2 md:w-1/2 order-last pointer-events-none"
        scrollProgress={scrollProgress}
      />
      <article
        className="bias-full w-full md:bias-1/2 md:w-1/2 relative bg-black/60 px-4 md:px-10"
        id="flight-path"
      >
        {/* <nav className="flex flex-row sticky top-0 justify-between bg-black z-10 py-6 px-2">
          <Link
            link="#"
            text="Flight Path"
            newTab={false}
            className="no-underline hover:underline text-xl px-4 font-bold text-yellow-500 hover:text-yellow-700"
          />
          <Link
            link="#"
            text="Data File"
            newTab={false}
            className="no-underline hover:underline text-xl px-4 font-bold text-yellow-500 hover:text-yellow-700"
          />
          <Link
            link="#"
            text="Explore the Mission"
            newTab={false}
            className="no-underline hover:underline text-xl px-4 font-bold text-yellow-500 hover:text-yellow-700"
          />
          <Link
            link="#"
            text="Apollo 15"
            newTab={false}
            className="no-underline hover:underline text-xl px-4 font-bold text-yellow-500 hover:text-yellow-700"
          />
        </nav> */}
        <div ref={steps}>
          {segments.map((segment) => {
            return (
              <div className="step text-xl content-center relative">
                {segment}
              </div>
            );
          })}
        </div>
      </article>
    </section>
  );
};

export default Scrollytell;
