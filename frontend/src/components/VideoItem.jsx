import classes from "./VideoItem.module.css";
const VideoItem = ({ img, title, desc, onClick }) => {
  return (
    <div className={classes.VideoItem} onClick={onClick}>
      <img src={img} alt="" />
      <h3>{title}</h3>
      <p>{desc}</p>
    </div>
  );
};

export default VideoItem;
