type Link = { label: string; to: string; key: string };

const Navbar = () => {
  const links: Link[] = [
    {
      label: "Galileo’s Moon (Apollo 15 Film)",
      to: "https://film.apollo15hub.org/",
      key: "bdfe4bf3",
    },
    { label: "Flight Path", to: "#flight-path", key: "9a842ec4" },
    {
      label: "Data File",
      to: "https://readux.ecds.emory.edu/collections/emory-control:LSDI-Apollo15/",
      key: "f1b7619f",
    },
    {
      label: "Exhibition",
      to: "https://apollo15hub.org/items/browse",
      key: "2f65795f",
    },
    {
      label: "Inside the Ship",
      to: "https://apollo15hub.org/lunarmodule",
      key: "0dbef19c",
    },
    { label: "About", to: "https://apollo15hub.org/about", key: "ad3f609d" },
  ];

  return (
    <nav className="border-gray-200">
      <div className="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 text-white">
        <a
          href="https://apollo15hub.org/"
          className="flex items-center space-x-3 rtl:space-x-reverse"
        >
          <span className="self-center text-2xl font-semibold whitespace-nowrap">
            The Apollo 15 Learning Hub
          </span>
        </a>
        <div className="hidden w-full md:block md:w-auto" id="navbar-default">
          <ul className="font-medium flex flex-col p-4 md:p-0 mt-4 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
            {links.map((link) => {
              return (
                <li className="m max-w-32" key={link.key}>
                  <a
                    href={link.to}
                    className="block py-2 px-3 text-white hover:text-yellow-300 text-center md:bg-transparent md md:p-0"
                    aria-current="page"
                  >
                    {link.label}
                  </a>
                </li>
              );
            })}
          </ul>
        </div>
      </div>
    </nav>
  );
};

export default Navbar;
