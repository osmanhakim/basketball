import { useEffect, useState } from "react";
import { useSelector } from "react-redux";
import { Link } from "react-router-dom";
const AboutUs = () => {
  const lang = useSelector((state) => {
    return state.basket.lang;
  });
  const [obj, setObj] = useState({});
  useEffect(() => {
    const func = async () => {
      const response = await fetch("http://localhost:8000/api/v1/about/1", {
        headers: {
          "Content-Type": "application/json",
          "Accept-Language": lang,
        },
      });
      const data = await response.json();
      setObj(data["data"]);
      console.log("obj", obj);
    };
    func();
  }, [lang]);
  return (
    <section className="about-feature bg-gray">
      <div className="container">
        <div className="row">
          <div
            className=" col-sm-12 col-md-12 col-lg-6 img-sec  wow fadeInLeft"
            data-wow-duration="1s"
            data-wow-delay=".5s"
          >
            <div className="about_img margin_aboutimg">
              <img src={obj.image} alt="about" />
            </div>
          </div>
          <div className="col-sm-12 col-md-12 col-lg-6">
            <div className="about-heading">
              <p
                className="colored_heading text-orange wow fadeInUp"
                data-wow-delay="400ms"
                data-wow-duration="0.5s"
                style={{
                  visibility: "visible",
                  animationDelay: "300ms",
                  animationName: "fadeInUp",
                }}
              >
                {obj.subtitle}
              </p>
              <h1
                className="heading margin_heading wow fadeInUp"
                data-wow-delay="600ms"
                data-wow-duration="0.8s"
                style={{
                  visibility: "visible",
                  animationDelay: "300ms",
                  animationName: "fadeInUp",
                }}
              >
                {obj.title}
              </h1>
              <p
                className="info  wow fadeInUp"
                data-wow-delay="800ms"
                data-wow-duration="1.3s"
                style={{
                  visibility: "visible",
                  animationDelay: "400ms",
                  animationName: "fadeInUp",
                }}
              >
                {obj.description}
              </p>
              <Link
                to="/gallery"
                className="btn btn-medium btn-rounded btn-blue margin_button  wow fadeInUp"
                data-wow-delay="900ms"
                data-wow-duration="1s"
                style={{
                  visibility: "visible",
                  animationDelay: "600ms",
                  animationName: "fadeInUp",
                }}
              >
                Learn More
              </Link>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default AboutUs;
