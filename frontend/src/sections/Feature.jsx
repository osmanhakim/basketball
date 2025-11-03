import { useEffect, useState } from "react";
import AboutItem from "../components/AboutItem";
import { useSelector } from "react-redux";
import { useTranslation } from "react-i18next";

const Feature = () => {
  const { i18n, t } = useTranslation();
  const lang = useSelector((state) => {
    return state.basket.lang;
  });

  const [list, setList] = useState([]);

  useEffect(() => {
    const func = async () => {
      const url = "http://localhost:8000/api/v1/features";
      const response = await fetch(url, {
        headers: {
          "Content-Type": "application/json",
          "Accept-Language": lang,
        },
      });

      const data = await response.json();
      setList(data["data"]);
    };
    func(); // <-- You forgot to call the async function
  }, [lang]);

  return (
    <section className="about bg-dark-grey" id="about">
      <div className="container">
        {/* Heading */}
        <div className="row">
          <div
            className="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2 m-auto text-center min-w-100 wow fadeIn"
            style={{ visibility: "visible", animationName: "fadeIn" }}
          >
            <div className="heading-area d-inline-block">
              <h6 className="sub-title alt-font text-sec text-orange">
                {t("Information about us")}
              </h6>
              <h2 className="title main-font text-main my-4">
                {t("Basket-Ball Benefits")}
              </h2>
            </div>
          </div>
        </div>

        {/* App Detail */}
        <div className="row align-items-center">
          {/* Services 1,2,3 */}
          <div
            className="col-lg-4 mb-5 mb-lg-0 wow fadeInLeft"
            data-wow-duration="1s"
            data-wow-delay=".5s"
          >
            {list &&
              list
                .slice(0, Math.floor(list.length / 2))
                .map((item, index) => (
                  <AboutItem
                    key={index}
                    icon={item.icon}
                    title={item.title}
                    description={item.description}
                  />
                ))}
          </div>

          {/* App Image */}
          <div
            className="col-lg-4 mb-5 mb-lg-0 wow fadeInUp"
            data-wow-duration="1s"
            data-wow-delay="1s"
          >
            <div className="app-image">
              <img src="http://localhost:8000/uploads/jordan.jpg" alt="image" />
            </div>
          </div>

          {/* Services 4,5,6 */}
          <div
            className="col-lg-4 wow fadeInRight"
            data-wow-duration="1s"
            data-wow-delay=".5s"
          >
            {list &&
              list
                .slice(Math.floor(list.length / 2), list.length)
                .map((item, index) => (
                  <AboutItem
                    key={index + Math.floor(list.length / 2)} // unique key
                    icon={item.icon}
                    title={item.title}
                    description={item.description}
                  />
                ))}
          </div>
        </div>
      </div>
    </section>
  );
};

export default Feature;
