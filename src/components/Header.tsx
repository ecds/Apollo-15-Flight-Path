const Header = () => {
  return (
    <section className="text-white md:mt-12 w-3/4 mx-auto text-center">
      <div className="md:bg-gray-500/50 rounded-md">
        <div className="py-8 px-4 mx-auto max-w-screen-lg lg:py-16">
          <h1 className="mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl lg:text-6xl text-white">
            Welcome to the Apollo 15 Learning Hub
          </h1>
          <p className="my-8 text-lg font-normal lg:text-xl sm:px-16 lg:px-48 text-gray-200">
            A project to assemble, preserve, and make available primary source
            records of Apollo 15 for research, education, and preservation as an
            example of a unique human endeavor.
          </p>
        </div>
      </div>
      <p className="my-24 text-lg font-normal lg:text-xl sm:px-16 lg:px-48 text-gray-200">
        Scroll down to take the flight path and explore.
      </p>

      <div className="max-w-sm md:max-w-xl mx-auto border rounded-lg shadow border-gray-700">
        <a href="https://film.apollo15hub.org/">
          <img
            className="rounded-t-lg"
            src="/themes/bigpicture/images/apollofilmimage.jpg"
            alt=""
          />
          <span className="sr-only">
            Link to Galileo's Moon, Apollo 15 Film
          </span>
        </a>
        <div className="p-5 bg-black">
          <a href="https://film.apollo15hub.org/">
            <h5 className="mb-2 text-2xl font-bold tracking-tight text-white">
              Apollo 15 Film
            </h5>
          </a>
        </div>
      </div>
      <div className="grid grid-cols-1 md:grid-cols-2 gap-8 my-16">
        <div className="max-w-sm md:max-w-xl mx-auto border rounded-lg shadow border-gray-700 opacity-100 md:opacity-50 hover:opacity-100">
          <a href="https://readux.io/collection/apollo-15/">
            <img className="rounded-t-lg" src="/images/manual-1.jpg" alt="" />
            <span className="sr-only">Manual</span>
          </a>
          <div className="p-5 bg-black">
            <a href="https://readux.io/collection/apollo-15/">
              <h5 className="mb-2 text-2xl font-bold tracking-tight text-white">
                Manual
              </h5>
            </a>
          </div>
        </div>

        <div className="max-w-sm md:max-w-xl mx-auto border rounded-lg shadow border-gray-700 opacity-100 md:opacity-50 hover:opacity-100">
          <a href="https://apollo15hub.org/lunarmodule">
            <img className="rounded-t-lg" src="/images/3d-1.jpg" alt="" />
            <span className="sr-only">Inside the Ship: 3D Model in Unity</span>
          </a>
          <div className="p-5 bg-black">
            <a href="https://apollo15hub.org/lunarmodule">
              <h5 className="mb-2 text-2xl font-bold tracking-tight text-white">
                Inside the Ship: 3D Model in Unity
              </h5>
            </a>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Header;
