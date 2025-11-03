const Popup = ({ img }) => {
  return (
    <div
      className="cbp-popup-wrap cbp-popup-lightbox cbp-popup-transitionend cbp-popup-ready"
      data-action="close"
    >
      <div className="cbp-popup-content">
        <div className="cbp-popup-lightbox-figure">
          <img
            src={img}
            className="cbp-popup-lightbox-img"
            data-action="next"
            style={{ maxHeight: "363px" }}
          />
          <div className="cbp-popup-lightbox-bottom">
            <div className="cbp-popup-lightbox-title">
              Women Cycling
              <br />
              by Best Women Cycling
            </div>
            <div className="cbp-popup-lightbox-counter">1 of 4</div>
          </div>
        </div>
      </div>
      <div className="cbp-popup-loadingBox"></div>
      <div className="cbp-popup-navigation-wrap">
        <div className="cbp-popup-navigation">
          <div
            className="cbp-popup-close"
            title="Close (Esc arrow key)"
            data-action="close"
          ></div>
          <div
            className="cbp-popup-next"
            title="Next (Right arrow key)"
            data-action="next"
          ></div>
          <div
            className="cbp-popup-prev"
            title="Previous (Left arrow key)"
            data-action="prev"
          ></div>
        </div>
      </div>
    </div>
  );
};

export default Popup;
