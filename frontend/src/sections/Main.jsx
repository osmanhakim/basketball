import { useEffect, useState } from "react";
import { useTranslation } from "react-i18next";
import { useSelector } from "react-redux";
import MainItem from "../components/MainItem";

const Main = () => {
  const { t } = useTranslation();
  const [list, setList] = useState([]);
  const lang = useSelector((state) => {
    return state.basket.lang;
  });
  useEffect(() => {
    const func = async () => {
      const response = await fetch("http://localhost:8000/api/v1/about", {
        headers: {
          "Content-Type": "application/json",
          "Accept-Language": lang,
        },
      });
      const data = await response.json();
      console.log("from main ", data["data"]);
      setList(data.data);
    };
    func();
  }, [lang]);
  return (
    <section className="main standalone bg-dark-grey" id="main">
      {/* <!--content--> */}
      <div className="blog-content">
        <div className="container">
          <div className="row no-gutters">
            <div className="col-12">
              {/* <!-- START HEADING SECTION --> */}
              <div className="standalone-detail">
                <div className="row no-gutters">
                  <div
                    className="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 min-w-100 m-auto text-center wow slideInUp"
                    data-wow-duration="2s"
                  >
                    <p className="sub-heading text-center text-blue">
                      {t("Building Skills, Having Fun")}
                    </p>
                    <h1 className="heading text-orang">
                      {t("Future Hoopers in Action")}
                    </h1>
                    <p className="para_text m-auto ">
                      {t("Watch young athletes")}
                    </p>
                  </div>
                </div>
              </div>

              <div className="standalone-area">
                {/* <!-- First-Row --> */}
                {list &&
                  list.map((item) => {
                    return (
                      <MainItem
                        left={item.id % 2 == 0 ? true : false}
                        img={item.image}
                        title={item.title}
                        subtitle={item.subtitle}
                        description={item.description}
                      />
                    );
                  })}
              </div>
              {/* <!-- END HEADING SECTION --> */}
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Main;
