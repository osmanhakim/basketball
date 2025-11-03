import { useSelector } from "react-redux";

const AboutItem = ({ title, description, icon, className }) => {
  const lang = useSelector((state) => {
    return state.basket.lang;
  });
  let cs = `mb-3 app-feature app-feature-flex ${
    lang == "ar" ? "app-feature-right" : "app-feature-left"
  }`;
  return (
    <div className={cs}>
      <div className="col-12 col-lg-2 p-lg-0">
        <i className={icon}></i>
      </div>
      <div className="col-12 col-lg-10 p-lg-0">
        <h4 className={cs}>{title}</h4>
        <p>{description}</p>
      </div>
    </div>
  );
};

export default AboutItem;
