import { configureStore, createSlice } from "@reduxjs/toolkit";

const basketSlice = createSlice({
  name: "basket",
  initialState: {
    lang: "en",
    i18n: {},
    list: [],
    slide: {},
  },
  reducers: {
    changeLanguage(state, action) {
      state.lang = action.payload;
      state.i18n.changeLanguage(action.payload);
      document.documentElement.lang = action.payload;
      document.documentElement.dir = action.payload == "ar" ? "rtl" : "ltr";
    },
    setI18n(state, action) {
      state.i18n = action.payload;
    },
    setList(state, action) {
      state.list = [...action.payload];
    },
    setSlide(state, action) {
      state.slide = action.payload;
    },
  },
});

const testSlice = createSlice({
  name: "test",
  initialState: {
    list: [],
    index: 0,
    current: null,
  },
  reducers: {
    setList(state, action) {
      state.list = [...action.payload];
    },
    next(state) {
      if (state.index >= state.list.length - 1) state.index = 0;
      else state.index++;
      state.current = state.list[state.index];
    },
  },
});

export const basketAction = basketSlice.actions;
export const testAction = testSlice.actions;

export const getSliderById = (id) => {
  return async (dispatch, getState) => {
    const response = await fetch("http://localhost:8000/api/v1/sliders/" + id, {
      headers: {
        "Content-Type": "application/json",
        "Accept-Language": getState().basket.lang,
      },
    });
    const data = await response.json();
    console.log("from store");
    console.log(data);
    dispatch(basketAction.setSlide(data["data"]));
  };
};

export const getProjectById = (id) => {
  return async (dispatch, getState) => {
    const response = await fetch("http://localhost:8000/api/v1/project/" + id, {
      headers: {
        "Content-Type": "application/json",
        "Accept-Language": getState().basket.lang,
      },
    });
    const data = await response.json();
    console.log("from store 2 ", data);
    dispatch(basketAction.setList(data["data"]));
  };
};
export const getAllProject = () => {
  return async (dispatch, getState) => {
    const response = await fetch("http://localhost:8000/api/v1/project", {
      headers: {
        "Content-Type": "application/json",
        "Accept-Language": getState().basket.lang,
      },
    });
    const data = await response.json();
    console.log("from store 2 ", data);
    dispatch(basketAction.setList(data["data"]));
  };
};

export const getHomePageSlide = () => {
  return async (dispatch, getState) => {
    const response = await fetch(
      "http://localhost:8000/api/v1/homePageSlider",
      {
        headers: {
          "content-Type": "application/json",
          "Accept-Language": getState().basket.lang,
        },
      }
    );

    const data = await response.json();
    dispatch(basketAction.setSlide(data["data"]));
  };
};

export const getSecondPageSlide = () => {
  return async (dispatch, getState) => {
    const response = await fetch(
      "http://localhost:8000/api/v1/secondPageSlider",
      {
        headers: {
          "content-Type": "application/json",
          "Accept-Language": getState().basket.lang,
        },
      }
    );

    const data = await response.json();
    dispatch(basketAction.setSlide(data["data"]));
  };
};
export const getTestimonials = () => {
  return async (dispatch, getState) => {
    const response = await fetch("http://localhost:8000/api/v1/testimonials", {
      headers: {
        "Content-Type": "application/json",
        "Accept-Language": getState().basket.lang,
      },
    });
    if (response.ok) {
      const data = await response.json();
      console.log("from testimonial ", data["data"]);
      const testimonialArray = data.data?.data;
      if (Array.isArray(testimonialArray)) {
        dispatch(testAction.setList(testimonialArray));
      } else {
        console.error("Expected an array but got:", data["data"]);
      }
    }
  };
};

const store = configureStore({
  reducer: {
    basket: basketSlice.reducer,
    test: testSlice.reducer,
  },
});

export default store;
