import { useEffect, useState } from "react";
import VideoItem from "../components/VideoItem";
import classes from "./Youtube.module.css";
import { useSelector } from "react-redux";
const Youtube = () => {
  let c = `row ${classes.section}`;
  const [clip, setClip] = useState(null);
  const lang = useSelector((state) => {
    return state.basket.lang;
  });
  const [videos, setVideos] = useState([]);
  useEffect(() => {
    const func = async () => {
      const response = await fetch("http://localhost:8000/api/v1/videos", {
        headers: {
          "Content-Type": "application/json",
          "Accept-Language": lang,
        },
      });
      const data = await response.json();
      setVideos(data["data"]);
    };
    func();
  }, [lang]);
  return (
    <div className={classes.youtube}>
      {/* <header>
        <div>
          <i className="fa-solid fa-basketball"></i>
          <p>BasketballKids</p>
        </div>
        <div method="post" action="">
          <input type="text" name="txt" placeholder="Search for videos" />
        </div>
        <button>search</button>
      </header> */}
      {clip && (
        <div className={classes.link}>
          <p
            onClick={() => {
              setClip(null);
            }}
          >
            Close
          </p>
          <iframe
            width="560"
            height="315"
            src={clip}
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen
          ></iframe>
        </div>
      )}
      {clip && <side className=""></side>}

      <section className={c}>
        {videos &&
          videos.map((item) => {
            return (
              <VideoItem
                className="col-xs-12 col-sm-6 col-md-4 col-lg-3 "
                img={item.image}
                title={item.title}
                desc={item.description}
                key={item.title}
                onClick={() => {
                  console.log("clicked");
                  let path = new URLSearchParams(item.link);
                  let start = item.link.search("v");
                  start += 2;
                  let res = item.link.slice(start);
                  let you = "http://youtube.com/embed/" + res;
                  setClip(you);

                  console.log(res);
                }}
              />
            );
          })}
      </section>
    </div>
  );
};

export default Youtube;
