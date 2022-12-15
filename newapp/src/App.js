import React from "react";
import Navbar from "./Navbar";
import '../node_modules/bootstrap/dist/css/bootstrap.min.css';
import Carousel from "./Carousel";
import AboutUs from "./AboutUs";
import OurWorks from "./OurWorks";

const App = () => {
    return(
      <>
        <Navbar />
        <Carousel />
        <AboutUs />
        <OurWorks />
      </>
    )
}

export default App;