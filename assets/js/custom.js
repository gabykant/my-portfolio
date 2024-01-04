const simpleFilters = document.querySelectorAll(".project-flters li");
Array.from(simpleFilters).forEach((node) =>
  node.addEventListener("click", function () {
    simpleFilters.forEach((filter) => filter.classList.remove("filter-active"));
    node.classList.add("filter-active");
  })
);

const filterizr = new window.Filterizr(".project-container", {
  controlsSelector: ".fltr-controls",
  gutterPixels: 15,
  spinner: {
    enabled: true,
    fillColor: "#2184D0",
    styles: {
      height: "75px",
      margin: "0 auto",
      width: "75px",
      "z-index": 2,
    },
  },
  // animationDuration: 0.5,
  // callbacks: {
  //   onInit: function () {},
  //   onFilteringStart: function () {},
  //   onFilteringEnd: function () {},
  //   onShufflingStart: function () {},
  //   onShufflingEnd: function () {},
  //   onSortingStart: function () {},
  //   onSortingEnd: function () {},
  // },
  // controlsSelector: ".fltr-controls",
  // delay: 0,
  // delayMode: "progressive",
  // easing: "ease-out",
  // filter: "all",
  // filterOutCss: {
  //   opacity: 0,
  //   transform: "scale(0.5)",
  // },
  // filterInCss: {
  //   opacity: 0,
  //   transform: "scale(1)",
  // },
  // gridItemsSelector: ".filtr-item",
  // gutterPixels: 15,
  // layout: "sameSize",
  // multifilterLogicalOperator: "or",
  // searchTerm: "",
  // setupControls: true,
  // spinner: {
  //   enabled: false,
  //   fillColor: "#2184D0",
  //   styles: {
  //     height: "75px",
  //     margin: "0 auto",
  //     width: "75px",
  //     "z-index": 2,
  //   },
  // },
});

// const filterizr = new Filterizr(".project-container", {
//   gutterPixels: 15,
//   spinner: {
//     enabled: true,
//   },
// });
