const MainItem = ({ left, img, title, subtitle, description }) => {
  return (
    <div className="row align-items-center my-5 text-light">
      {left ? (
        <>
          {/* Image Left */}
          <div className="col-md-6">
            <img src={img} alt={title} className="img-fluid" />
          </div>
          <div className="col-md-6">
            <h2>{title}</h2>
            <h4>{subtitle}</h4>
            <p>{description}</p>
          </div>
        </>
      ) : (
        <>
          {/* Image Right */}
          <div className="col-md-6 order-md-2 mb-2">
            <img src={img} alt={title} className="img-fluid" />
          </div>
          <div className="col-md-6 order-md-1">
            <h2>{title}</h2>
            <h4>{subtitle}</h4>
            <p>{description}</p>
          </div>
        </>
      )}
    </div>
  );
};

export default MainItem;
