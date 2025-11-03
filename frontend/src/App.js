import logo from "./logo.svg";
import "./App.css";
import Header from "./sections/Header";
import Feature from "./sections/Feature";
import AboutUs from "./sections/AboutUs.jsx";
import Banner from "./sections/Banner";
import { useTranslation } from "react-i18next";
import Gallery from "./sections/Gallery";
import Testimonial from "./sections/Testimonial";
import Contact from "./sections/Contact";
import Footer from "./sections/Footer";
import { useEffect } from "react";
import { useSelector, useDispatch } from "react-redux";
import {
  basketAction,
  getSliderById,
  getHomePageSlide,
} from "./store/index.js";
function App() {
  const lang = useSelector((state) => {
    return state.basket.lang;
  });

  const slide = useSelector((state) => {
    return state.basket.slide;
  });

  const dispatch = useDispatch();
  useEffect(() => {
    // dispatch(getSliderById(1));
    dispatch(getHomePageSlide());
  }, [lang]);

  useEffect(() => {
    console.log(slide);
  }, [slide]);
  return (
    <>
      <img src={slide.image} alt="" />
      <div className="App">
        {/* <Header /> */}
        <Banner />
        <Feature />
        <AboutUs />
        <Gallery />
        <Testimonial />
        <Contact />
        {/* <Footer /> */}
      </div>
    </>
  );
}

export default App;
