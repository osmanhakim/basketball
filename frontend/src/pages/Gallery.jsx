import Header from "../sections/Header";
import Bredcumbs from "../sections/Bredcumbs";
import Main from "../sections/Main";
import { useEffect } from "react";
import { useSelector, useDispatch } from "react-redux";
import { getSliderById, getSecondPageSlide } from "../store";
import Banner from "../sections/Banner";
import Footer from "../sections/Footer";
const Gallery = () => {
  const lang = useSelector((state) => {
    return state.basket.lang;
  });

  const slide = useSelector((state) => {
    return state.basket.slide;
  });

  useEffect(() => {
    console.log(slide);
  }, [slide]);

  const dispatch = useDispatch();
  useEffect(() => {
    //  dispatch(getSliderById(2));
    dispatch(getSecondPageSlide());
  }, [lang]);

  useEffect(() => {
    window.scrollTo(0, 0);
  }, []);
  return (
    <>
      <img src={slide.image} alt="" />
      <div className="App">
        <Banner />
        <Main />
        {/* <Footer /> */}
      </div>
    </>
  );
};

export default Gallery;
