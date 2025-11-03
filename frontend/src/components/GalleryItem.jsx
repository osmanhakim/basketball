import Popup from "../sections/Popup";
import classes from "./GalleryItem.module.css";
import { useState } from "react";
const GalleryItem = ({ img, title, subtitle }) => {
  let classItem = `cbp-item web logo ${classes.GalleryItem}`;
  const [show, setShow] = useState(false);
  const map = {
    position: "absolute",
    top: "0%",
    left: "0%",
    width: "100%",
    height: "100%",
    border: "20px solid #fff",
  };
  return (
    <>
      <div
        className={classItem}
        onMouseOver={() => {
          setShow(true);
        }}
        onMouseOut={() => {
          setShow(false);
        }}
      >
        <div
          className="row gap-4 "
          data-title="Women Cycling<br>by Best Women Cycling"
        >
          <div className=" cbp-caption-defaultWrap">
            <img src={img} alt="img" />
          </div>
          {show && (
            <div
              className="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end"
              style={map}
            >
              <div className="portfolio-inner-content">
                <span></span>
                <span></span>
              </div>
              <div className="hover-text">
                <h4 className="p-hover-title">{title}</h4>
                <p className="p-hover-des">{subtitle}</p>
              </div>
            </div>
          )}
        </div>
      </div>
    </>
  );
};
export default GalleryItem;
