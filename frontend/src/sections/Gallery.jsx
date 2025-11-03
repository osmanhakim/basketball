import GalleryItem from "../components/GalleryItem";
import classes from "./gallery.module.css";
import { Link } from "react-router-dom";
import { useTranslation } from "react-i18next";
import { useSelector, useDispatch } from "react-redux";
import { useEffect, useRef, useState } from "react";
import { getProjectById, getAllProject } from "../store";
const Gallery = () => {
  const [sets, setSets] = useState([]);
  const { i18n, t } = useTranslation();
  const list = useSelector((state) => {
    return state.basket.list;
  });
  let name = `cbp-filter-item m-3 cbp-filter-item-active`;
  const lang = useSelector((state) => {
    return state.basket.lang;
  });
  const [project, setProject] = useState({});
  const dispatch = useDispatch();
  useEffect(() => {
    const func = async () => {
      const response = await fetch("http://localhost:8000/api/v1/projectList", {
        headers: {
          "Content-Type": "application/json",
          "Accept-Language": lang,
        },
      });
      const data = await response.json();
      console.log("data from project List");
      console.log(data);
      setSets(data["data"]);
      setSets((obj) => {
        return [{ id: 0, name: t("All Projects") }, ...obj];
      });
    };
    func();
    if (!isEmpty(project)) dispatch(getProjectById(project.id));
    else {
      dispatch(getAllProject());
    }
  }, [lang]);

  const cl = `portfolio-sec company-portfolio-section bg-dark-grey ${classes.gallerySection}`;
  return (
    <section className={cl} id="portfolio-section">
      <div className="container">
        <div className="section-heading">
          <div className="row">
            <div
              className="col-lg-6 wow fadeInUp  text-center text-lg-left"
              data-wow-delay="300ms"
            >
              <h1 className="heading">
                <span className="d-block">
                  {t("Awesome Basket-Ball Photos")}
                </span>
              </h1>
            </div>
            {/* <!-- Filters --> */}
            <div className="col-md-12 pt-4 pt-md-5">
              <div
                id="js-filters-mosaic"
                className="cbp-l-filters-button wow fadeInUp text-center text-lg-left"
                data-wow-delay="350ms"
              >
                {sets &&
                  sets.map((item) => {
                    return (
                      <div
                        key={item.id}
                        data-filter="*"
                        className={item.id === 0 ? name : "cbp-filter-item"}
                        onClick={(event) => {
                          const all =
                            document.querySelectorAll(".cbp-filter-item");
                          all.forEach((element) => {
                            element.classList.remove("cbp-filter-item-active");
                          });
                          event.target.classList.add("cbp-filter-item-active");
                          console.log("item ", item);
                          if (item.id != 0) dispatch(getProjectById(item.id));
                          else {
                            dispatch(getAllProject());
                          }
                          setProject(item);
                        }}
                      >
                        {item.name}
                      </div>
                    );
                  })}
              </div>
              <div
                id="js-grid-mosaic"
                className="cbp col-sm-12 col-md-6 text-md-center col-lg-12 cbp-l-grid-mosaic"
              >
                {/* <!-- Image-1 --> */}
                {list &&
                  list.map((item) => {
                    return (
                      <GalleryItem
                        title={item.title}
                        subtitle={item.subtitle}
                        img={item.image}
                      />
                    );
                  })}

                {/* <!-- Button --> */}
                <div
                  id="js-loadMore-lightbox-gallery"
                  className="cbp-l-loadMore-button text-data wow fadeInUp"
                  data-wow-delay="650ms"
                >
                  <div className="row portfolio-foot-detail text-data-inner">
                    <div className="col-7 col-lg-4 offset-lg-6 text-left pl-4">
                      <span className="p-text">
                        {t("We've Many More Then")}
                      </span>
                      <h4 className="p-num">630</h4>
                      <span className="p-text">
                        {t("Basket-ball Images in Our Collection")}
                      </span>
                    </div>
                    <div className="col-5 col-lg-2 d-flex justify-content-end align-items-center">
                      <Link
                        to="/gallery"
                        className="btn orange-and-blue-btn rounded-pill"
                      >
                        {t("View More")}
                      </Link>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Gallery;

function isEmpty(obj) {
  for (var prop in obj) {
    if (obj.hasOwnProperty(prop)) return false;
  }

  return true;
}
