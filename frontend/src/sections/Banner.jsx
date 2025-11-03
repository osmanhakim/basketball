import { useEffect } from "react";
import { useSelector } from "react-redux";
const Banner = () => {
  const slide = useSelector((state) => {
    return state.basket.slide;
  });
  return (
    <section
      className="banner-see bg-banner"
      id="banner"
      style={{
        position: "absolute",
        index: "10",
        width: "100%",
        height: "100%",
        top: "0",
        left: "0",
      }}
    >
      <div className="container">
        <div className="row height">
          <div className="col-lg-6  d-flex align-items-center">
            <div className="banner-div">
              <h3 className="banner-text">{slide.sub_title}</h3>
              <h1 className="banner-heading">{slide.title}</h1>
              <p className="banner-des">{slide.description}</p>
              <a
                data-fancybox="media"
                href="https://www.youtube.com/watch?v=ll3VRpsUIXY"
                className="scroll button"
              >
                <i className="las la-play"></i>Play Video
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Banner;
