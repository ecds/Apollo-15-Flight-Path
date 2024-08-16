import type { ReactNode } from "react";

interface Element {
  children: ReactNode;
}

export const Paragraph = ({ children }: Element) => {
  return <p className="tracking-wide m-4 text-xl font-light">{children}</p>;
};

export const StickyHeader = ({ children }: Element) => {
  return (
    <h4 className="sticky bg-black top-0 text-3xl p-4 tracking-wider font-bold z-10">
      {children}
    </h4>
  );
};

export const Blockquote = ({ children }: Element) => {
  return (
    <blockquote className="font-serif italic text-yellow-300 p-6 my-4 leading-8 tracking-wider">
      {children}
    </blockquote>
  );
};

export const FigCaption = ({
  text,
  link,
  className,
}: {
  text: string;
  link: string;
  className?: string;
}) => {
  return (
    <figcaption
      className={`flex flex-row flex-grow justify-between p-4 ${className}`}
    >
      <div
        className="text-2xl tracking-wider"
        dangerouslySetInnerHTML={{
          __html: text,
        }}
      />

      <div>
        <a
          href={link}
          target="_blank"
          className="uppercase tracking-wider border p-2 text-yellow-500 border-yellow-500"
        >
          view
        </a>
      </div>
    </figcaption>
  );
};

export const IFrame = ({
  source,
  title,
  link,
  className,
}: {
  source: string;
  title: string;
  link: string;
  className?: string;
}) => {
  return (
    <figure>
      <iframe
        className={className ?? "w-full aspect-video"}
        src={source}
        title={title}
        allowFullScreen
      />
      <FigCaption text={title} link={link} />
    </figure>
  );
};

export const Image = ({
  source,
  link,
  alt,
  title,
}: {
  source: string;
  link: string;
  title: string;
  alt?: string;
}) => {
  return (
    <a href={link} target="_blank">
      <img
        src={source}
        alt={alt ?? ""}
        className="h-auto max-w-full p-4 mx-auto"
        title={title}
      />
      <span className="sr-only">{title}</span>
    </a>
  );
};

export const Figure = ({
  source,
  link,
  title,
  alt,
}: {
  source: string;
  link: string;
  title: string;
  alt?: string;
}) => {
  return (
    <figure>
      <Image source={source} link={link} alt={alt ?? ""} title={title} />
      <FigCaption text={title} link={link} />
    </figure>
  );
};

export const Link = ({
  link,
  text,
  newTab = true,
  className,
}: {
  link: string;
  text?: string;
  newTab?: boolean;
  className?: string;
}) => {
  return (
    <a
      href={link}
      className={`text-yellow-100 underline hover:text-yellow-300 visited:text-yellow-600 ${className}`}
      target={newTab ? "_blank" : "_self"}
    >
      {text ?? link}
    </a>
  );
};
