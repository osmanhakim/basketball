import { useState, useEffect } from "react";
import TestimonialItem from "../components/TestimonialItem";
import { useTranslation } from "react-i18next";
import { getTestimonials, testAction } from "../store";
import { useDispatch, useSelector } from "react-redux";
const Testimonial = () => {
  const [loading, setLoading] = useState(false);
  const test = useSelector((state) => {
    return state.test;
  });
  const lang = useSelector((state) => {
    return state.basket.lang;
  });
  const dispatch = useDispatch();
  const { i18n, t } = useTranslation();
  useEffect(() => {
    let id;
    if (!loading) {
      id = setInterval(() => {
        dispatch(testAction.next());
        console.log(test);
        console.log("test.current", test.current);
      }, 10000);
      setLoading(true);
    }

    return () => {
      clearInterval(id);
    };
  }, []);
  useEffect(() => {
    dispatch(getTestimonials());
  }, [lang]);
  return (
    <section className="reviews-sec bg-gray p-0 " id="review">
      <div className="container-fluid">
        <div className="row">
          <div className="col-lg-6 col-md-12 hover-effect position-relative p-0 ">
            <div className="">
              <img
                alt="blog"
                src="http://localhost:8000/uploads/seeders/testimonials/basket.jpg"
                className="about-img"
              />
            </div>
          </div>
          <div
            className="col-md-12 col-lg-6 p-lg-0  wow fadeInRight order-1 order-md-2"
            data-wow-duration="1s"
            data-wow-delay=".5s"
          >
            <div className="review-heading text-center text-orange">
              <h2 className="text-center">{t("Happy Coaches")}</h2>
            </div>
            <div className="testimonial-carousel">
              <div className="testimonial-box owl-carousel owl-theme"></div>
            </div>
            <div className="classImgs" style={{ textAlign: "center" }}>
              {test.current && (
                <TestimonialItem
                  img={test.current.image}
                  name={test.current.name}
                  desc={test.current.description}
                />
              )}
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Testimonial;
