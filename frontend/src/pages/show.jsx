import classes from "./show.module.css";
import ReactPlayer from "react-player";
const Show = ({ video }) => {
  <div className={classes.show}>
    <ReactPlayer url={video} />
  </div>;
};

export default Show;
