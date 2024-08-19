import { useEffect, useRef, useState } from "react";
import scrollama from "scrollama";
import FlightPath from "./FlightPath";
import { sections } from "./Article";
import { useResizeObserver } from "../hooks";
import type { ScrollamaInstance } from "scrollama";
import { Link, StickyHeader } from "./Layout";

const Scrollytell = () => {
  const scrollerRef = useRef<ScrollamaInstance | undefined>(undefined);
  const [scrollProgress, setScrollProgress] = useState<number>(0.0);
  const [setupFailed, setSetupFailed] = useState<boolean>(false);
  const [shouldRetry, setShouldRetry] = useState<boolean>(false);
  const [topOffset, setTopOffset] = useState<number>(76);
  const { documentSize } = useResizeObserver();
  const steps = useRef<HTMLDivElement>(null);
  const stickyNavRef = useRef<HTMLElement>(null);

  useEffect(() => {
    if (
      steps?.current?.children.length !== sections.length ||
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
  }, [parent, steps, sections, shouldRetry]);

  useEffect(() => {
    // Mostly a bug when navigating from error page.
    setShouldRetry(setupFailed);
  }, [setupFailed]);

  useEffect(() => {
    if (stickyNavRef.current) {
      setTopOffset(stickyNavRef.current.clientHeight);
    }
    try {
      scrollerRef.current?.resize();
    } catch (error) {
      return;
    }
  }, [documentSize]);

  return (
    <main
      className="flex flex-col md:flex-row justify-between"
      id="flight-path"
    >
      <FlightPath
        className="sticky p-8 md:p-0 top-0 h-screen mt-16 bias-full w-full md:bias-1/2 md:w-1/2 order-last pointer-events-none"
        scrollProgress={scrollProgress}
      />
      <article
        className="bias-full w-full md:bias-1/2 md:w-1/2 relative bg-black/60 px-4 md:px-10"
        id="flight-path"
      >
        <nav
          ref={stickyNavRef}
          className="flex flex-row sticky top-0 justify-between bg-black z-10 pt-4 px-2"
        >
          <Link
            link="#flight-path"
            text="Flight Path"
            newTab={false}
            className="no-underline hover:underline text-xl px-4 font-bold text-yellow-500 hover:text-yellow-700"
          />
          <Link
            link="https://readux.io/collection/apollo-15/"
            text="Data File"
            newTab={false}
            className="no-underline hover:underline text-xl px-4 font-bold text-yellow-500 hover:text-yellow-700"
          />
          <Link
            link="https://apollo15hub.org/exhibit-media"
            text="Explore the Mission"
            newTab={false}
            className="no-underline hover:underline text-xl px-4 font-bold text-yellow-500 hover:text-yellow-700"
          />
          <Link
            link="/"
            text="Apollo 15"
            newTab={false}
            className="no-underline hover:underline text-xl px-4 font-bold text-yellow-500 hover:text-yellow-700"
          />
        </nav>
        <div ref={steps}>
          {sections.map((section) => {
            return (
              <div
                className="step text-xl content-center relative"
                key={section.key}
              >
                <StickyHeader offset={topOffset}>
                  {section.heading}
                </StickyHeader>
                {section.content}
              </div>
            );
          })}
        </div>
      </article>
    </main>
  );
};

export default Scrollytell;
