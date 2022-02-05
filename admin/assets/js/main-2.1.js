/*
 *  Document   : main.js
 *  Author     : pixelcave
 */ var webApp = (function () {
  var a = function () {
      var a = $("#year-copy"),
        e = new Date();
      a.html(
        2013 === e.getFullYear()
          ? "2013"
          : "2013-" + e.getFullYear().toString().substr(2, 2)
      );
      var t = $("#page-content");
      t.css(
        "min-height",
        $(window).height() -
          ($("header").height() + $("footer").outerHeight()) +
          "px"
      ),
        $(window).resize(function () {
          t.css(
            "min-height",
            $(window).height() -
              ($("header").height() + $("footer").outerHeight()) +
              "px"
          );
        }),
        $("header").hasClass("navbar-fixed-top")
          ? $("#page-container").addClass("header-fixed-top")
          : $("header").hasClass("navbar-fixed-bottom") &&
            $("#page-container").addClass("header-fixed-bottom"),
        $("thead input:checkbox").click(function () {
          var a = $(this).prop("checked"),
            e = $(this).closest("table");
          $("tbody input:checkbox", e).each(function () {
            $(this).prop("checked", a);
          });
        }),
        $('[data-toggle="tabs"] a').click(function (a) {
          a.preventDefault(), $(this).tab("show");
        }),
        $('[data-toggle="gallery-options"] > li')
          .mouseover(function () {
            $(this).find(".thumbnails-options").show();
          })
          .mouseout(function () {
            $(this).find(".thumbnails-options").hide();
          }),
        $(".scrollable").slimScroll({
          height: "100px",
          size: "3px",
          touchScrollStep: 100,
        }),
        $(".scrollable-tile").slimScroll({
          height: "130px",
          size: "3px",
          touchScrollStep: 100,
        }),
        $(".scrollable-tile-2x").slimScroll({
          height: "330px",
          size: "3px",
          touchScrollStep: 100,
        }),
        $('[data-toggle="tooltip"]').tooltip({
          container: "body",
          animation: !1,
        }), 
        $('[data-toggle="popover"]').popover({
          container: "body",
          animation: !1,
        }),
        $(".select-chosen").chosen(),
        $(".select-select2").select2(),
        $("textarea.textarea-elastic").elastic(),
        $("textarea.textarea-editor").wysihtml5(),
        $(".input-colorpicker").colorpicker(),
        $(".input-timepicker").timepicker(),
        $(".input-datepicker").datepicker(),
        $(".input-daterangepicker").daterangepicker(),
        $("input, textarea").placeholder();
    },
    e = function () {
      $(".loading-on").click(function () {
        var a = $("#loading");
        a.fadeIn(250),
          $("#widgets > li > a > .badge").addClass("display-none"),
          setTimeout(function () {
            a.fadeOut(250),
              $("#rss-widget > a > .badge")
                .removeClass("display-none")
                .html("5"),
              $("#twitter-widget > a > .badge")
                .removeClass("display-none")
                .html("4");
          }, 1e3);
      });
      var a = [
        "Afghanistan",
        "Albania",
        "Algeria",
        "American Samoa",
        "Andorra",
        "Angola",
        "Anguilla",
        "Antarctica",
        "Antigua and Barbuda",
        "Argentina",
        "Armenia",
        "Aruba",
        "Australia",
        "Austria",
        "Azerbaijan",
        "Bahrain",
        "Bangladesh",
        "Barbados",
        "Belarus",
        "Belgium",
        "Zambia",
        "Zimbabwe",
      ];
      $(".example-typeahead").typeahead({ items: 5, source: a });
      var e = $("#example-advanced-daterangepicker"),
        t = $("#example-advanced-daterangepicker span");
      e.daterangepicker(
        {
          ranges: {
            Today: ["today", "today"],
            Yesterday: ["yesterday", "yesterday"],
            "Last 7 Days": [Date.today().add({ days: -6 }), "today"],
            "Last 30 Days": [Date.today().add({ days: -29 }), "today"],
            "This Month": [
              Date.today().moveToFirstDayOfMonth(),
              Date.today().moveToLastDayOfMonth(),
            ],
            "Last Month": [
              Date.today().moveToFirstDayOfMonth().add({ months: -1 }),
              Date.today().moveToFirstDayOfMonth().add({ days: -1 }),
            ],
          },
        },
        function (a, e) {
          t.html(a.toString("MMMM d, yy") + " - " + e.toString("MMMM d, yy"));
        }
      ),
        t.html(
          Date.today().toString("MMMM d, yy") +
            " - " +
            Date.today().toString("MMMM d, yy")
        );
    },
    t = function () {
      var a = $("#primary-nav > ul > li > a");
      a.filter(function () {
          return $(this).next().is("ul");
        }).each(function (a, e) {
          $(e).append("<span>" + $(e).next("ul").children().length + "</span>");
        }),
      a.click(function () {
          var a = $(this);
          return a.next("ul").length > 0
            ? (a.parent().hasClass("active") !== !0 &&
                (a.hasClass("open")
                  ? a.removeClass("open").next().slideUp(250)
                  : ($("#primary-nav li > a.open")
                      .removeClass("open")
                      .next()
                      .slideUp(250),
                    a.addClass("open").next().slideDown(250))),
              !1)
            : !0;
        });
    },
    n = function () {
      var a = $("#to-top");
      $(window).scroll(function () {
        $(this).scrollTop() > 150 ? a.fadeIn(150) : a.fadeOut(150);
      }),
        a.click(function () {
          return $("html, body").animate({ scrollTop: 0 }, 300), !1;
        });
    },
    i = function () {
      var a = $("#topt-fixed-header-top input"),
        e = $("#topt-fixed-header-bottom input"),
        t = $("#topt-fixed-layout input"),
        n = $("header"),
        i = $("#page-container"),
        o = $("body");
      $(".btn-theme-options").click(function () {
        return (
          $(this).toggleClass("open"),
          $("#theme-options-content").slideToggle(200),
          !1
        );
      }),
        n.hasClass("navbar-fixed-top") && a.prop("checked", !0),
        n.hasClass("navbar-fixed-bottom") && e.prop("checked", !0),
        o.hasClass("fixed") && t.prop("checked", !0),
        a.change(function () {
          $(this).is(":checked")
            ? (e.prop("checked", !1),
              n.removeClass("navbar-fixed-bottom").addClass("navbar-fixed-top"),
              i.removeClass("header-fixed-bottom").addClass("header-fixed-top"))
            : (n.removeClass("navbar-fixed-top"),
              i.removeClass("header-fixed-top"));
        }),
        e.change(function () {
          $(this).is(":checked")
            ? (a.prop("checked", !1),
              n.removeClass("navbar-fixed-top").addClass("navbar-fixed-bottom"),
              i.removeClass("header-fixed-top").addClass("header-fixed-bottom"))
            : (n.removeClass("navbar-fixed-bottom"),
              i.removeClass("header-fixed-bottom"));
        }),
        t.change(function () {
          $(this).is(":checked") ? o.addClass("fixed") : o.removeClass("fixed");
        });
      var r,
        s = $(".theme-colors"),
        l = $("#theme-link");
      l.length &&
        ((r = l.attr("href")),
        $("li", s).removeClass("active"),
        $('a[data-theme="' + r + '"]', s)
          .parent("li")
          .addClass("active")),
        $("a", s).click(function () {
          (r = $(this).data("theme")),
            $("li", s).removeClass("active"),
            $(this).parent("li").addClass("active"),
            "default" === r
              ? l.length && (l.remove(), (l = $("#theme-link")))
              : l.length
              ? l.attr("href", r)
              : ($('link[href="css/main-2.1.css"]').after(
                  '<link id="theme-link" rel="stylesheet" href="' + r + '">'
                ),
                (l = $("#theme-link")));
        });
    },
    o = function () {
      $.extend(!0, $.fn.dataTable.defaults, {
        sDom: "<'row'<'col-sm-6 col-xs-5'l><'col-sm-6 col-xs-7'f>r>t<'row'<'col-sm-5 hidden-xs'i><'col-sm-7 col-xs-12 clearfix'p>>",
        sPaginationType: "bootstrap",
        oLanguage: {
          sLengthMenu: "_MENU_",
          sSearch:
            '<div class="input-group">_INPUT_<span class="input-group-addon"><i class="fa fa-search"></i></span></div>',
          sInfo:
            "<strong>_START_</strong>-<strong>_END_</strong> of <strong>_TOTAL_</strong>",
          oPaginate: { sPrevious: "", sNext: "" },
        },
      }),
        $.extend($.fn.dataTableExt.oStdClasses, {
          sWrapper: "dataTables_wrapper form-inline",
          sFilterInput: "form-control",
          sLengthSelect: "form-control",
        });
    };
  return {
    init: function () {
      a(), e(), t(), n(), i(), o();
    },
  };
})();
$(function () {
  webApp.init();
});
