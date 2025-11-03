import classes from "./testimonialItem.module.css";
const TestimonialItem = ({ img, name, desc }) => {
  const msg = `item text-center animate-fade split-container-setting style-three  ${classes.parent}`;
  return (
    <div className={msg} style={{ textAlign: "center" }}>
      <div className="icon-holder text-center">
        <i className="fas fa-quote-right "></i>
      </div>
      <p className="text wow fadeInLeft " data-wow-delay=".7s">
        {desc}
      </p>
      <div className="img-holder text-center">
        <img src={img} alt="Image" />
      </div>
      <h4 className="user-name text-center">{name}</h4>
    </div>
  );
};

export default TestimonialItem;
