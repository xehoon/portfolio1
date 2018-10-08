// date picker
// $(function() {
//   $( ".calendar" ).datepicker({
// 		dateFormat: 'dd/mm/yy',
// 		firstDay: 1
// 	});
	
// 	$(document).on('click', '.date-picker .input', function(e){
// 		var $me = $(this),
// 				$parent = $me.parents('.date-picker');
// 		$parent.toggleClass('open');
// 	});
	
	
// 	$(".calendar").on("change",function(){
// 		var $me = $(this),
// 				$selected = $me.val(),
// 				$parent = $me.parents('.date-picker');
// 		$parent.find('.result').children('span').html($selected);
// 	});
// });

// dropdown menu
// $('.dropdown-toggle').dropdown()



// slick marquee  
jQuery(document).ready(function($) {
  $('.slick.marquee').slick({
    speed: 5000,
    autoplay: true,
    autoplaySpeed: 0,
    centerMode: true,
    cssEase: 'linear',
    slidesToShow: 1,
    slidesToScroll: 1,
    variableWidth: true,
    infinite: true,
    initialSlide: 1,
    arrows: false,
    buttons: false
  });
});

"use strict";

Vue.component("doughnut", {
  props: ["data", "labels"],
  data: function data() {
    ctx: null;
  },
  template: "\n    <canvas></canvas>\n  ",
  mounted: function mounted() {
    var self = this;
    this.ctx = this.$el.getContext("2d");

    new Chart(this.ctx, {
      type: "doughnut",
      options: {
        cutoutPercentage: 80
      },
      data: {
        labels: self.labels,
        datasets: [{
          data: self.data,
          backgroundColor: ["#cc0033","#FF6347","#1BC98E", "#1CA8DD"],
          hoverBackgroundColor: ["#cc0033","#FF6347","#1BC98E", "#1CA8DD"]
// "cc0033"

        }]
      }
    });
  }
});

Vue.component("sparkline", {
  props: ["title", "value"],
  data: function data() {
    ctx: null;
  },
  template: "\n    <div class=\"br2\">\n      <div class=\"pa3 flex-auto bb b--white-10\">\n        <h3 class=\"mt0 mb1 f6 ttu white o-70\">{{ title }}</h3>\n        <h2 class=\"mv0 f2 fw5 white\">{{ value }}</h2>\n      </div>\n      <div class=\"pt2\">\n        <canvas></canvas>\n      </div>\n    </div>\n  ",
  mounted: function mounted() {
    this.ctx = this.$el.querySelector("canvas").getContext("2d");
    var sparklineGradient = this.ctx.createLinearGradient(0, 0, 0, 135);
    sparklineGradient.addColorStop(0, "rgba(255,255,255,0.35)");
    sparklineGradient.addColorStop(1, "rgba(255,255,255,0)");

    var data = {
      labels: ["A", "B", "C", "D", "E", "F"],
      datasets: [{
        backgroundColor: sparklineGradient,
        borderColor: "#FFFFFF",
        data: [2, 4, 6, 4, 8, 10]
      }]
    };

    Chart.Line(this.ctx, {
      data: data,
      options: {
        elements: {
          point: {
            radius: 0
          }
        },
        scales: {
          xAxes: [{
            display: false
          }],
          yAxes: [{
            display: false
          }]
        }
      }
    });
  }
});

Vue.component("metric-list-item", {
  props: ["name", "value", "showBar"],
  computed: {
    barWidth: function barWidth() {
      return this.value + "%";
    }
  },
  template: "\n    <a href=\"#\" class=\"link dark-gray flex justify-between relative pa3 bb b--black-10 hover-bg-near-white\">\n      <span v-if=\"showBar\" class=\"absolute top-0 left-0 right-0 bottom-0 h-100 bg-near-white\" v-bind:style=\"{ width: barWidth, zIndex: -1 }\"></span>\n      <span>{{ name }}</span>\n      <span>{{ value }}</span>\n    </a>\n  "
});

new Vue({
  el: "#dashboard",
  data: {
    newVsReturning: {
      data: [10,30, 260, 0],
      labels: ["사망:1명","부상자:3명", "무사고", "무사고" ]
    },
    newVsRecurring: {
      data: [0,0,160, 260],
      labels: ["0", "0","보통:", "양호"]
    },
    directVsReferrals: {
      data: [0,0,30, 270],
      labels: ["0", "0","예보:모기주의보", "전염병:없음"]
    },
    countryData: [{
      name: "United States",
      value: "62.4",
      showBar: true
    }, {
      name: "India",
      value: "15",
      showBar: true
    }, {
      name: "United Kingdom",
      value: "5",
      showBar: true
    }, {
      name: "Canada",
      value: "5",
      showBar: true
    }, {
      name: "Russia",
      value: "4.5",
      showBar: true
    }, {
      name: "Mexico",
      value: "2.3",
      showBar: true
    }, {
      name: "Spain",
      value: "1.7",
      showBar: true
    }],
    pageData: [{
      name: "/ (Logged out)",
      value: "3,929,481",
      showBar: false
    }, {
      name: "/ (Logged in)",
      value: "1,143,393",
      showBar: false
    }, {
      name: "/tour",
      value: "938,287",
      showBar: false
    }, {
      name: "/features/something",
      value: "749,393",
      showBar: false
    }, {
      name: "/features/another-thing",
      value: "695,912",
      showBar: false
    }, {
      name: "/users/username",
      value: "501,938",
      showBar: false
    }, {
      name: "/page-title",
      value: "392,842",
      showBar: false
    }],
    deviceData: [{
      name: "Desktop (1920x1080)",
      value: "3,929,481",
      showBar: false
    }, {
      name: "Desktop (1366x768)",
      value: "1,143,393",
      showBar: false
    }, {
      name: "Desktop (1440x900)",
      value: "938,287",
      showBar: false
    }, {
      name: "Desktop (1280x800)",
      value: "749,393",
      showBar: false
    }, {
      name: "Tablet (1024x768)",
      value: "695,912",
      showBar: false
    }, {
      name: "Tablet (768x1024)",
      value: "501,938",
      showBar: false
    }, {
      name: "Phone (320x480)",
      value: "392,842",
      showBar: false
    }, {
      name: "Phone (720x450)",
      value: "298,183",
      showBar: false
    }, {
      name: "Desktop (2560x1080)",
      value: "193,129",
      showBar: false
    }, {
      name: "Desktop (2560x1600)",
      value: "93,382",
      showBar: false
    }]
  },
  created: function created() {
    Chart.defaults.global.legend.display = false;
  }
});


// ----------------------------------
// 
// $(function(){
