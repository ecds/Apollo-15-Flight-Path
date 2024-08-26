import "./index.css";
import Background from "./components/Background";
import Navbar from "./components/Navbar";
import Header from "./components/Header";
import Scrollytell from "./components/Scrollytell";

function App() {
  return (
    <div className="w-screen bg-gradient-to-b from-black to-gray-800 text-white font-sans overflow-x-hidden">
      <Background />
      <Navbar />
      <Header />
      <Scrollytell />
    </div>
  );
}

export default App;
