// datetimepicker JS

(function (a) {
    if (typeof define === "function" && define.amd) {
        define(["jquery"], a)
    } else {
        if (typeof exports === "object") {
            a(require("jquery"))
        } else {
            a(jQuery)
        }
    }
}(function (d, f) {
    if (!("indexOf" in Array.prototype)) {
        Array.prototype.indexOf = function (k, j) {
            if (j === f) {
                j = 0
            }
            if (j < 0) {
                j += this.length
            }
            if (j < 0) {
                j = 0
            }
            for (var l = this.length; j < l; j++) {
                if (j in this && this[j] === k) {
                    return j
                }
            }
            return -1
        }
    }

    function a() {
        var q, k, p, l, j, n, m, o;
        k = (new Date()).toString();
        p = ((m = k.split("(")[1]) != null ? m.slice(0, -1) : 0) || k.split(" ");
        if (p instanceof Array) {
            n = [];
            for (var l = 0, j = p.length; l < j; l++) {
                o = p[l];
                if ((q = (m = o.match(/\b[A-Z]+\b/)) !== null) ? m[0] : 0) {
                    n.push(q)
                }
            }
            p = n.pop()
        }
        return p
    }

    function h() {
        return new Date(Date.UTC.apply(Date, arguments))
    }

    var g = function (k, j) {
        var m = this;
        this.element = d(k);
        this.container = j.container || "body";
        this.language = j.language || this.element.data("date-language") || "en";
        this.language = this.language in e ? this.language : this.language.split("-")[0];
        this.language = this.language in e ? this.language : "en";
        this.isRTL = e[this.language].rtl || false;
        this.formatType = j.formatType || this.element.data("format-type") || "standard";
        this.format = c.parseFormat(j.format || this.element.data("date-format") || e[this.language].format || c.getDefaultFormat(this.formatType, "input"), this.formatType);
        this.isInline = false;
        this.isVisible = false;
        this.isInput = this.element.is("input");
        this.fontAwesome = j.fontAwesome || this.element.data("font-awesome") || false;
        this.bootcssVer = j.bootcssVer || (this.isInput ? (this.element.is(".form-control") ? 3 : 2) : (this.bootcssVer = this.element.is(".input-group") ? 3 : 2));
        this.component = this.element.is(".date") ? (this.bootcssVer === 3 ? this.element.find(".input-group-addon .glyphicon-th, .input-group-addon .glyphicon-time, .input-group-addon .glyphicon-remove, .input-group-addon .glyphicon-calendar, .input-group-addon .fa-calendar, .input-group-addon .fa-clock-o").parent() : this.element.find(".add-on .icon-th, .add-on .icon-time, .add-on .icon-calendar, .add-on .fa-calendar, .add-on .fa-clock-o").parent()) : false;
        this.componentReset = this.element.is(".date") ? (this.bootcssVer === 3 ? this.element.find(".input-group-addon .glyphicon-remove, .input-group-addon .fa-times").parent() : this.element.find(".add-on .icon-remove, .add-on .fa-times").parent()) : false;
        this.hasInput = this.component && this.element.find("input").length;
        if (this.component && this.component.length === 0) {
            this.component = false
        }
        this.linkField = j.linkField || this.element.data("link-field") || false;
        this.linkFormat = c.parseFormat(j.linkFormat || this.element.data("link-format") || c.getDefaultFormat(this.formatType, "link"), this.formatType);
        this.minuteStep = j.minuteStep || this.element.data("minute-step") || 5;
        this.pickerPosition = j.pickerPosition || this.element.data("picker-position") || "bottom-right";
        this.showMeridian = j.showMeridian || this.element.data("show-meridian") || false;
        this.initialDate = j.initialDate || new Date();
        this.zIndex = j.zIndex || this.element.data("z-index") || f;
        this.title = typeof j.title === "undefined" ? false : j.title;
        this.timezone = j.timezone || a();
        this.icons = {
            leftArrow: this.fontAwesome ? "fa-arrow-left" : (this.bootcssVer === 3 ? "glyphicon-arrow-left" : "icon-arrow-left"),
            rightArrow: this.fontAwesome ? "fa-arrow-right" : (this.bootcssVer === 3 ? "glyphicon-arrow-right" : "icon-arrow-right")
        };
        this.icontype = this.fontAwesome ? "fa" : "glyphicon";
        this._attachEvents();
        this.clickedOutside = function (n) {
            if (d(n.target).closest(".datetimepicker").length === 0) {
                m.hide()
            }
        };
        this.formatViewType = "datetime";
        if ("formatViewType" in j) {
            this.formatViewType = j.formatViewType
        } else {
            if ("formatViewType" in this.element.data()) {
                this.formatViewType = this.element.data("formatViewType")
            }
        }
        this.minView = 0;
        if ("minView" in j) {
            this.minView = j.minView
        } else {
            if ("minView" in this.element.data()) {
                this.minView = this.element.data("min-view")
            }
        }
        this.minView = c.convertViewMode(this.minView);
        this.maxView = c.modes.length - 1;
        if ("maxView" in j) {
            this.maxView = j.maxView
        } else {
            if ("maxView" in this.element.data()) {
                this.maxView = this.element.data("max-view")
            }
        }
        this.maxView = c.convertViewMode(this.maxView);
        this.wheelViewModeNavigation = false;
        if ("wheelViewModeNavigation" in j) {
            this.wheelViewModeNavigation = j.wheelViewModeNavigation
        } else {
            if ("wheelViewModeNavigation" in this.element.data()) {
                this.wheelViewModeNavigation = this.element.data("view-mode-wheel-navigation")
            }
        }
        this.wheelViewModeNavigationInverseDirection = false;
        if ("wheelViewModeNavigationInverseDirection" in j) {
            this.wheelViewModeNavigationInverseDirection = j.wheelViewModeNavigationInverseDirection
        } else {
            if ("wheelViewModeNavigationInverseDirection" in this.element.data()) {
                this.wheelViewModeNavigationInverseDirection = this.element.data("view-mode-wheel-navigation-inverse-dir")
            }
        }
        this.wheelViewModeNavigationDelay = 100;
        if ("wheelViewModeNavigationDelay" in j) {
            this.wheelViewModeNavigationDelay = j.wheelViewModeNavigationDelay
        } else {
            if ("wheelViewModeNavigationDelay" in this.element.data()) {
                this.wheelViewModeNavigationDelay = this.element.data("view-mode-wheel-navigation-delay")
            }
        }
        this.startViewMode = 2;
        if ("startView" in j) {
            this.startViewMode = j.startView
        } else {
            if ("startView" in this.element.data()) {
                this.startViewMode = this.element.data("start-view")
            }
        }
        this.startViewMode = c.convertViewMode(this.startViewMode);
        this.viewMode = this.startViewMode;
        this.viewSelect = this.minView;
        if ("viewSelect" in j) {
            this.viewSelect = j.viewSelect
        } else {
            if ("viewSelect" in this.element.data()) {
                this.viewSelect = this.element.data("view-select")
            }
        }
        this.viewSelect = c.convertViewMode(this.viewSelect);
        this.forceParse = true;
        if ("forceParse" in j) {
            this.forceParse = j.forceParse
        } else {
            if ("dateForceParse" in this.element.data()) {
                this.forceParse = this.element.data("date-force-parse")
            }
        }
        var l = this.bootcssVer === 3 ? c.templateV3 : c.template;
        while (l.indexOf("{iconType}") !== -1) {
            l = l.replace("{iconType}", this.icontype)
        }
        while (l.indexOf("{leftArrow}") !== -1) {
            l = l.replace("{leftArrow}", this.icons.leftArrow)
        }
        while (l.indexOf("{rightArrow}") !== -1) {
            l = l.replace("{rightArrow}", this.icons.rightArrow)
        }
        this.picker = d(l).appendTo(this.isInline ? this.element : this.container).on({
            click: d.proxy(this.click, this),
            mousedown: d.proxy(this.mousedown, this)
        });
        if (this.wheelViewModeNavigation) {
            if (d.fn.mousewheel) {
                this.picker.on({mousewheel: d.proxy(this.mousewheel, this)})
            } else {
                console.log("Mouse Wheel event is not supported. Please include the jQuery Mouse Wheel plugin before enabling this option")
            }
        }
        if (this.isInline) {
            this.picker.addClass("datetimepicker-inline")
        } else {
            this.picker.addClass("datetimepicker-dropdown-" + this.pickerPosition + " dropdown-menu")
        }
        if (this.isRTL) {
            this.picker.addClass("datetimepicker-rtl");
            var i = this.bootcssVer === 3 ? ".prev span, .next span" : ".prev i, .next i";
            this.picker.find(i).toggleClass(this.icons.leftArrow + " " + this.icons.rightArrow)
        }
        d(document).on("mousedown touchend", this.clickedOutside);
        this.autoclose = false;
        if ("autoclose" in j) {
            this.autoclose = j.autoclose
        } else {
            if ("dateAutoclose" in this.element.data()) {
                this.autoclose = this.element.data("date-autoclose")
            }
        }
        this.keyboardNavigation = true;
        if ("keyboardNavigation" in j) {
            this.keyboardNavigation = j.keyboardNavigation
        } else {
            if ("dateKeyboardNavigation" in this.element.data()) {
                this.keyboardNavigation = this.element.data("date-keyboard-navigation")
            }
        }
        this.todayBtn = (j.todayBtn || this.element.data("date-today-btn") || false);
        this.clearBtn = (j.clearBtn || this.element.data("date-clear-btn") || false);
        this.todayHighlight = (j.todayHighlight || this.element.data("date-today-highlight") || false);
        this.weekStart = 0;
        if (typeof j.weekStart !== "undefined") {
            this.weekStart = j.weekStart
        } else {
            if (typeof this.element.data("date-weekstart") !== "undefined") {
                this.weekStart = this.element.data("date-weekstart")
            } else {
                if (typeof e[this.language].weekStart !== "undefined") {
                    this.weekStart = e[this.language].weekStart
                }
            }
        }
        this.weekStart = this.weekStart % 7;
        this.weekEnd = ((this.weekStart + 6) % 7);
        this.onRenderDay = function (n) {
            var p = (j.onRenderDay || function () {
                return []
            })(n);
            if (typeof p === "string") {
                p = [p]
            }
            var o = ["day"];
            return o.concat((p ? p : []))
        };
        this.onRenderHour = function (n) {
            var p = (j.onRenderHour || function () {
                return []
            })(n);
            var o = ["hour"];
            if (typeof p === "string") {
                p = [p]
            }
            return o.concat((p ? p : []))
        };
        this.onRenderMinute = function (n) {
            var p = (j.onRenderMinute || function () {
                return []
            })(n);
            var o = ["minute"];
            if (typeof p === "string") {
                p = [p]
            }
            if (n < this.startDate || n > this.endDate) {
                o.push("disabled")
            } else {
                if (Math.floor(this.date.getUTCMinutes() / this.minuteStep) === Math.floor(n.getUTCMinutes() / this.minuteStep)) {
                    o.push("active")
                }
            }
            return o.concat((p ? p : []))
        };
        this.onRenderYear = function (o) {
            var q = (j.onRenderYear || function () {
                return []
            })(o);
            var p = ["year"];
            if (typeof q === "string") {
                q = [q]
            }
            if (this.date.getUTCFullYear() === o.getUTCFullYear()) {
                p.push("active")
            }
            var n = o.getUTCFullYear();
            var r = this.endDate.getUTCFullYear();
            if (o < this.startDate || n > r) {
                p.push("disabled")
            }
            return p.concat((q ? q : []))
        };
        this.onRenderMonth = function (n) {
            var p = (j.onRenderMonth || function () {
                return []
            })(n);
            var o = ["month"];
            if (typeof p === "string") {
                p = [p]
            }
            return o.concat((p ? p : []))
        };
        this.startDate = new Date(-8639968443048000);
        this.endDate = new Date(8639968443048000);
        this.datesDisabled = [];
        this.daysOfWeekDisabled = [];
        this.setStartDate(j.startDate || this.element.data("date-startdate"));
        this.setEndDate(j.endDate || this.element.data("date-enddate"));
        this.setDatesDisabled(j.datesDisabled || this.element.data("date-dates-disabled"));
        this.setDaysOfWeekDisabled(j.daysOfWeekDisabled || this.element.data("date-days-of-week-disabled"));
        this.setMinutesDisabled(j.minutesDisabled || this.element.data("date-minute-disabled"));
        this.setHoursDisabled(j.hoursDisabled || this.element.data("date-hour-disabled"));
        this.fillDow();
        this.fillMonths();
        this.update();
        this.showMode();
        if (this.isInline) {
            this.show()
        }
    };
    g.prototype = {
        constructor: g, _events: [], _attachEvents: function () {
            this._detachEvents();
            if (this.isInput) {
                this._events = [[this.element, {
                    focus: d.proxy(this.show, this),
                    keyup: d.proxy(this.update, this),
                    keydown: d.proxy(this.keydown, this)
                }]]
            } else {
                if (this.component && this.hasInput) {
                    this._events = [[this.element.find("input"), {
                        focus: d.proxy(this.show, this),
                        keyup: d.proxy(this.update, this),
                        keydown: d.proxy(this.keydown, this)
                    }], [this.component, {click: d.proxy(this.show, this)}]];
                    if (this.componentReset) {
                        this._events.push([this.componentReset, {click: d.proxy(this.reset, this)}])
                    }
                } else {
                    if (this.element.is("div")) {
                        this.isInline = true
                    } else {
                        this._events = [[this.element, {click: d.proxy(this.show, this)}]]
                    }
                }
            }
            for (var j = 0, k, l; j < this._events.length; j++) {
                k = this._events[j][0];
                l = this._events[j][1];
                k.on(l)
            }
        }, _detachEvents: function () {
            for (var j = 0, k, l; j < this._events.length; j++) {
                k = this._events[j][0];
                l = this._events[j][1];
                k.off(l)
            }
            this._events = []
        }, show: function (i) {
            this.picker.show();
            this.height = this.component ? this.component.outerHeight() : this.element.outerHeight();
            if (this.forceParse) {
                this.update()
            }
            this.place();
            d(window).on("resize", d.proxy(this.place, this));
            if (i) {
                i.stopPropagation();
                i.preventDefault()
            }
            this.isVisible = true;
            this.element.trigger({type: "show", date: this.date})
        }, hide: function () {
            if (!this.isVisible) {
                return
            }
            if (this.isInline) {
                return
            }
            this.picker.hide();
            d(window).off("resize", this.place);
            this.viewMode = this.startViewMode;
            this.showMode();
            if (!this.isInput) {
                d(document).off("mousedown", this.hide)
            }
            if (this.forceParse && (this.isInput && this.element.val() || this.hasInput && this.element.find("input").val())) {
                this.setValue()
            }
            this.isVisible = false;
            this.element.trigger({type: "hide", date: this.date})
        }, remove: function () {
            this._detachEvents();
            d(document).off("mousedown", this.clickedOutside);
            this.picker.remove();
            delete this.picker;
            delete this.element.data().datetimepicker
        }, getDate: function () {
            var i = this.getUTCDate();
            if (i === null) {
                return null
            }
            return new Date(i.getTime() + (i.getTimezoneOffset() * 60000))
        }, getUTCDate: function () {
            return this.date
        }, getInitialDate: function () {
            return this.initialDate
        }, setInitialDate: function (i) {
            this.initialDate = i
        }, setDate: function (i) {
            this.setUTCDate(new Date(i.getTime() - (i.getTimezoneOffset() * 60000)))
        }, setUTCDate: function (i) {
            if (i >= this.startDate && i <= this.endDate) {
                this.date = i;
                this.setValue();
                this.viewDate = this.date;
                this.fill()
            } else {
                this.element.trigger({type: "outOfRange", date: i, startDate: this.startDate, endDate: this.endDate})
            }
        }, setFormat: function (j) {
            this.format = c.parseFormat(j, this.formatType);
            var i;
            if (this.isInput) {
                i = this.element
            } else {
                if (this.component) {
                    i = this.element.find("input")
                }
            }
            if (i && i.val()) {
                this.setValue()
            }
        }, setValue: function () {
            var i = this.getFormattedDate();
            if (!this.isInput) {
                if (this.component) {
                    this.element.find("input").val(i)
                }
                this.element.data("date", i)
            } else {
                this.element.val(i)
            }
            if (this.linkField) {
                d("#" + this.linkField).val(this.getFormattedDate(this.linkFormat))
            }
        }, getFormattedDate: function (i) {
            i = i || this.format;
            return c.formatDate(this.date, i, this.language, this.formatType, this.timezone)
        }, setStartDate: function (i) {
            this.startDate = i || this.startDate;
            if (this.startDate.valueOf() !== 8639968443048000) {
                this.startDate = c.parseDate(this.startDate, this.format, this.language, this.formatType, this.timezone)
            }
            this.update();
            this.updateNavArrows()
        }, setEndDate: function (i) {
            this.endDate = i || this.endDate;
            if (this.endDate.valueOf() !== 8639968443048000) {
                this.endDate = c.parseDate(this.endDate, this.format, this.language, this.formatType, this.timezone)
            }
            this.update();
            this.updateNavArrows()
        }, setDatesDisabled: function (j) {
            this.datesDisabled = j || [];
            if (!d.isArray(this.datesDisabled)) {
                this.datesDisabled = this.datesDisabled.split(/,\s*/)
            }
            var i = this;
            this.datesDisabled = d.map(this.datesDisabled, function (k) {
                return c.parseDate(k, i.format, i.language, i.formatType, i.timezone).toDateString()
            });
            this.update();
            this.updateNavArrows()
        }, setTitle: function (i, j) {
            return this.picker.find(i).find("th:eq(1)").text(this.title === false ? j : this.title)
        }, setDaysOfWeekDisabled: function (i) {
            this.daysOfWeekDisabled = i || [];
            if (!d.isArray(this.daysOfWeekDisabled)) {
                this.daysOfWeekDisabled = this.daysOfWeekDisabled.split(/,\s*/)
            }
            this.daysOfWeekDisabled = d.map(this.daysOfWeekDisabled, function (j) {
                return parseInt(j, 10)
            });
            this.update();
            this.updateNavArrows()
        }, setMinutesDisabled: function (i) {
            this.minutesDisabled = i || [];
            if (!d.isArray(this.minutesDisabled)) {
                this.minutesDisabled = this.minutesDisabled.split(/,\s*/)
            }
            this.minutesDisabled = d.map(this.minutesDisabled, function (j) {
                return parseInt(j, 10)
            });
            this.update();
            this.updateNavArrows()
        }, setHoursDisabled: function (i) {
            this.hoursDisabled = i || [];
            if (!d.isArray(this.hoursDisabled)) {
                this.hoursDisabled = this.hoursDisabled.split(/,\s*/)
            }
            this.hoursDisabled = d.map(this.hoursDisabled, function (j) {
                return parseInt(j, 10)
            });
            this.update();
            this.updateNavArrows()
        }, place: function () {
            if (this.isInline) {
                return
            }
            if (!this.zIndex) {
                var j = 0;
                d("div").each(function () {
                    var o = parseInt(d(this).css("zIndex"), 10);
                    if (o > j) {
                        j = o
                    }
                });
                this.zIndex = j + 10
            }
            var n, m, l, k;
            if (this.container instanceof d) {
                k = this.container.offset()
            } else {
                k = d(this.container).offset()
            }
            if (this.component) {
                n = this.component.offset();
                l = n.left;
                if (this.pickerPosition === "bottom-left" || this.pickerPosition === "top-left") {
                    l += this.component.outerWidth() - this.picker.outerWidth()
                }
            } else {
                n = this.element.offset();
                l = n.left;
                if (this.pickerPosition === "bottom-left" || this.pickerPosition === "top-left") {
                    l += this.element.outerWidth() - this.picker.outerWidth()
                }
            }
            var i = document.body.clientWidth || window.innerWidth;
            if (l + 220 > i) {
                l = i - 220
            }
            if (this.pickerPosition === "top-left" || this.pickerPosition === "top-right") {
                m = n.top - this.picker.outerHeight()
            } else {
                m = n.top + this.height
            }
            m = m - k.top;
            l = l - k.left;
            this.picker.css({top: m, left: l, zIndex: this.zIndex})
        }, hour_minute: "^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]", update: function () {
            var i, j = false;
            if (arguments && arguments.length && (typeof arguments[0] === "string" || arguments[0] instanceof Date)) {
                i = arguments[0];
                j = true
            } else {
                i = (this.isInput ? this.element.val() : this.element.find("input").val()) || this.element.data("date") || this.initialDate;
                if (typeof i === "string") {
                    i = i.replace(/^\s+|\s+$/g, "")
                }
            }
            if (!i) {
                i = new Date();
                j = false
            }
            if (typeof i === "string") {
                if (new RegExp(this.hour_minute).test(i) || new RegExp(this.hour_minute + ":[0-5][0-9]").test(i)) {
                    i = this.getDate()
                }
            }
            this.date = c.parseDate(i, this.format, this.language, this.formatType, this.timezone);
            if (j) {
                this.setValue()
            }
            if (this.date < this.startDate) {
                this.viewDate = new Date(this.startDate)
            } else {
                if (this.date > this.endDate) {
                    this.viewDate = new Date(this.endDate)
                } else {
                    this.viewDate = new Date(this.date)
                }
            }
            this.fill()
        }, fillDow: function () {
            var i = this.weekStart, j = "<tr>";
            while (i < this.weekStart + 7) {
                j += '<th class="dow">' + e[this.language].daysMin[(i++) % 7] + "</th>"
            }
            j += "</tr>";
            this.picker.find(".datetimepicker-days thead").append(j)
        }, fillMonths: function () {
            var l = "";
            var m = new Date(this.viewDate);
            for (var k = 0; k < 12; k++) {
                m.setUTCMonth(k);
                var j = this.onRenderMonth(m);
                l += '<span class="' + j.join(" ") + '">' + e[this.language].monthsShort[k] + "</span>"
            }
            this.picker.find(".datetimepicker-months td").html(l)
        }, fill: function () {
            if (!this.date || !this.viewDate) {
                return
            }
            var E = new Date(this.viewDate), t = E.getUTCFullYear(), G = E.getUTCMonth(), n = E.getUTCDate(),
                A = E.getUTCHours(), w = this.startDate.getUTCFullYear(), B = this.startDate.getUTCMonth(),
                p = this.endDate.getUTCFullYear(), x = this.endDate.getUTCMonth() + 1,
                q = (new h(this.date.getUTCFullYear(), this.date.getUTCMonth(), this.date.getUTCDate())).valueOf(),
                D = new Date();
            this.setTitle(".datetimepicker-days", e[this.language].months[G] + " " + t);
            if (this.formatViewType === "time") {
                var k = this.getFormattedDate();
                this.setTitle(".datetimepicker-hours", k);
                this.setTitle(".datetimepicker-minutes", k)
            } else {
                this.setTitle(".datetimepicker-hours", n + " " + e[this.language].months[G] + " " + t);
                this.setTitle(".datetimepicker-minutes", n + " " + e[this.language].months[G] + " " + t)
            }
            this.picker.find("tfoot th.today").text(e[this.language].today || e.en.today).toggle(this.todayBtn !== false);
            this.picker.find("tfoot th.clear").text(e[this.language].clear || e.en.clear).toggle(this.clearBtn !== false);
            this.updateNavArrows();
            this.fillMonths();
            var I = h(t, G - 1, 28, 0, 0, 0, 0), z = c.getDaysInMonth(I.getUTCFullYear(), I.getUTCMonth());
            I.setUTCDate(z);
            I.setUTCDate(z - (I.getUTCDay() - this.weekStart + 7) % 7);
            var j = new Date(I);
            j.setUTCDate(j.getUTCDate() + 42);
            j = j.valueOf();
            var r = [];
            var F;
            while (I.valueOf() < j) {
                if (I.getUTCDay() === this.weekStart) {
                    r.push("<tr>")
                }
                F = this.onRenderDay(I);
                if (I.getUTCFullYear() < t || (I.getUTCFullYear() === t && I.getUTCMonth() < G)) {
                    F.push("old")
                } else {
                    if (I.getUTCFullYear() > t || (I.getUTCFullYear() === t && I.getUTCMonth() > G)) {
                        F.push("new")
                    }
                }
                if (this.todayHighlight && I.getUTCFullYear() === D.getFullYear() && I.getUTCMonth() === D.getMonth() && I.getUTCDate() === D.getDate()) {
                    F.push("today")
                }
                if (I.valueOf() === q) {
                    F.push("active")
                }
                if ((I.valueOf() + 86400000) <= this.startDate || I.valueOf() > this.endDate || d.inArray(I.getUTCDay(), this.daysOfWeekDisabled) !== -1 || d.inArray(I.toDateString(), this.datesDisabled) !== -1) {
                    F.push("disabled")
                }
                r.push('<td class="' + F.join(" ") + '">' + I.getUTCDate() + "</td>");
                if (I.getUTCDay() === this.weekEnd) {
                    r.push("</tr>")
                }
                I.setUTCDate(I.getUTCDate() + 1)
            }
            this.picker.find(".datetimepicker-days tbody").empty().append(r.join(""));
            r = [];
            var u = "", C = "", s = "";
            var l = this.hoursDisabled || [];
            E = new Date(this.viewDate);
            for (var y = 0; y < 24; y++) {
                E.setUTCHours(y);
                F = this.onRenderHour(E);
                if (l.indexOf(y) !== -1) {
                    F.push("disabled")
                }
                var v = h(t, G, n, y);
                if ((v.valueOf() + 3600000) <= this.startDate || v.valueOf() > this.endDate) {
                    F.push("disabled")
                } else {
                    if (A === y) {
                        F.push("active")
                    }
                }
                if (this.showMeridian && e[this.language].meridiem.length === 2) {
                    C = (y < 12 ? e[this.language].meridiem[0] : e[this.language].meridiem[1]);
                    if (C !== s) {
                        if (s !== "") {
                            r.push("</fieldset>")
                        }
                        r.push('<fieldset class="hour"><legend>' + C.toUpperCase() + "</legend>")
                    }
                    s = C;
                    u = (y % 12 ? y % 12 : 12);
                    if (y < 12) {
                        F.push("hour_am")
                    } else {
                        F.push("hour_pm")
                    }
                    r.push('<span class="' + F.join(" ") + '">' + u + "</span>");
                    if (y === 23) {
                        r.push("</fieldset>")
                    }
                } else {
                    u = y + ":00";
                    r.push('<span class="' + F.join(" ") + '">' + u + "</span>")
                }
            }
            this.picker.find(".datetimepicker-hours td").html(r.join(""));
            r = [];
            u = "";
            C = "";
            s = "";
            var m = this.minutesDisabled || [];
            E = new Date(this.viewDate);
            for (var y = 0; y < 60; y += this.minuteStep) {
                if (m.indexOf(y) !== -1) {
                    continue
                }
                E.setUTCMinutes(y);
                E.setUTCSeconds(0);
                F = this.onRenderMinute(E);
                if (this.showMeridian && e[this.language].meridiem.length === 2) {
                    C = (A < 12 ? e[this.language].meridiem[0] : e[this.language].meridiem[1]);
                    if (C !== s) {
                        if (s !== "") {
                            r.push("</fieldset>")
                        }
                        r.push('<fieldset class="minute"><legend>' + C.toUpperCase() + "</legend>")
                    }
                    s = C;
                    u = (A % 12 ? A % 12 : 12);
                    r.push('<span class="' + F.join(" ") + '">' + u + ":" + (y < 10 ? "0" + y : y) + "</span>");
                    if (y === 59) {
                        r.push("</fieldset>")
                    }
                } else {
                    u = y + ":00";
                    r.push('<span class="' + F.join(" ") + '">' + A + ":" + (y < 10 ? "0" + y : y) + "</span>")
                }
            }
            this.picker.find(".datetimepicker-minutes td").html(r.join(""));
            var J = this.date.getUTCFullYear();
            var o = this.setTitle(".datetimepicker-months", t).end().find(".month").removeClass("active");
            if (J === t) {
                o.eq(this.date.getUTCMonth()).addClass("active")
            }
            if (t < w || t > p) {
                o.addClass("disabled")
            }
            if (t === w) {
                o.slice(0, B).addClass("disabled")
            }
            if (t === p) {
                o.slice(x).addClass("disabled")
            }
            r = "";
            t = parseInt(t / 10, 10) * 10;
            var H = this.setTitle(".datetimepicker-years", t + "-" + (t + 9)).end().find("td");
            t -= 1;
            E = new Date(this.viewDate);
            for (var y = -1; y < 11; y++) {
                E.setUTCFullYear(t);
                F = this.onRenderYear(E);
                if (y === -1 || y === 10) {
                    F.push(b)
                }
                r += '<span class="' + F.join(" ") + '">' + t + "</span>";
                t += 1
            }
            H.html(r);
            this.place()
        }, updateNavArrows: function () {
            var m = new Date(this.viewDate), k = m.getUTCFullYear(), l = m.getUTCMonth(), j = m.getUTCDate(),
                i = m.getUTCHours();
            switch (this.viewMode) {
                case 0:
                    if (k <= this.startDate.getUTCFullYear() && l <= this.startDate.getUTCMonth() && j <= this.startDate.getUTCDate() && i <= this.startDate.getUTCHours()) {
                        this.picker.find(".prev").css({visibility: "hidden"})
                    } else {
                        this.picker.find(".prev").css({visibility: "visible"})
                    }
                    if (k >= this.endDate.getUTCFullYear() && l >= this.endDate.getUTCMonth() && j >= this.endDate.getUTCDate() && i >= this.endDate.getUTCHours()) {
                        this.picker.find(".next").css({visibility: "hidden"})
                    } else {
                        this.picker.find(".next").css({visibility: "visible"})
                    }
                    break;
                case 1:
                    if (k <= this.startDate.getUTCFullYear() && l <= this.startDate.getUTCMonth() && j <= this.startDate.getUTCDate()) {
                        this.picker.find(".prev").css({visibility: "hidden"})
                    } else {
                        this.picker.find(".prev").css({visibility: "visible"})
                    }
                    if (k >= this.endDate.getUTCFullYear() && l >= this.endDate.getUTCMonth() && j >= this.endDate.getUTCDate()) {
                        this.picker.find(".next").css({visibility: "hidden"})
                    } else {
                        this.picker.find(".next").css({visibility: "visible"})
                    }
                    break;
                case 2:
                    if (k <= this.startDate.getUTCFullYear() && l <= this.startDate.getUTCMonth()) {
                        this.picker.find(".prev").css({visibility: "hidden"})
                    } else {
                        this.picker.find(".prev").css({visibility: "visible"})
                    }
                    if (k >= this.endDate.getUTCFullYear() && l >= this.endDate.getUTCMonth()) {
                        this.picker.find(".next").css({visibility: "hidden"})
                    } else {
                        this.picker.find(".next").css({visibility: "visible"})
                    }
                    break;
                case 3:
                case 4:
                    if (k <= this.startDate.getUTCFullYear()) {
                        this.picker.find(".prev").css({visibility: "hidden"})
                    } else {
                        this.picker.find(".prev").css({visibility: "visible"})
                    }
                    if (k >= this.endDate.getUTCFullYear()) {
                        this.picker.find(".next").css({visibility: "hidden"})
                    } else {
                        this.picker.find(".next").css({visibility: "visible"})
                    }
                    break
            }
        }, mousewheel: function (j) {
            j.preventDefault();
            j.stopPropagation();
            if (this.wheelPause) {
                return
            }
            this.wheelPause = true;
            var i = j.originalEvent;
            var l = i.wheelDelta;
            var k = l > 0 ? 1 : (l === 0) ? 0 : -1;
            if (this.wheelViewModeNavigationInverseDirection) {
                k = -k
            }
            this.showMode(k);
            setTimeout(d.proxy(function () {
                this.wheelPause = false
            }, this), this.wheelViewModeNavigationDelay)
        }, click: function (m) {
            m.stopPropagation();
            m.preventDefault();
            var n = d(m.target).closest("span, td, th, legend");
            if (n.is("." + this.icontype)) {
                n = d(n).parent().closest("span, td, th, legend")
            }
            if (n.length === 1) {
                if (n.is(".disabled")) {
                    this.element.trigger({
                        type: "outOfRange",
                        date: this.viewDate,
                        startDate: this.startDate,
                        endDate: this.endDate
                    });
                    return
                }
                switch (n[0].nodeName.toLowerCase()) {
                    case"th":
                        switch (n[0].className) {
                            case"switch":
                                this.showMode(1);
                                break;
                            case"prev":
                            case"next":
                                var i = c.modes[this.viewMode].navStep * (n[0].className === "prev" ? -1 : 1);
                                switch (this.viewMode) {
                                    case 0:
                                        this.viewDate = this.moveHour(this.viewDate, i);
                                        break;
                                    case 1:
                                        this.viewDate = this.moveDate(this.viewDate, i);
                                        break;
                                    case 2:
                                        this.viewDate = this.moveMonth(this.viewDate, i);
                                        break;
                                    case 3:
                                    case 4:
                                        this.viewDate = this.moveYear(this.viewDate, i);
                                        break
                                }
                                this.fill();
                                this.element.trigger({
                                    type: n[0].className + ":" + this.convertViewModeText(this.viewMode),
                                    date: this.viewDate,
                                    startDate: this.startDate,
                                    endDate: this.endDate
                                });
                                break;
                            case"clear":
                                this.reset();
                                if (this.autoclose) {
                                    this.hide()
                                }
                                break;
                            case"today":
                                var j = new Date();
                                j = h(j.getFullYear(), j.getMonth(), j.getDate(), j.getHours(), j.getMinutes(), j.getSeconds(), 0);
                                if (j < this.startDate) {
                                    j = this.startDate
                                } else {
                                    if (j > this.endDate) {
                                        j = this.endDate
                                    }
                                }
                                this.viewMode = this.startViewMode;
                                this.showMode(0);
                                this._setDate(j);
                                this.fill();
                                if (this.autoclose) {
                                    this.hide()
                                }
                                break
                        }
                        break;
                    case"span":
                        if (!n.is(".disabled")) {
                            var p = this.viewDate.getUTCFullYear(), o = this.viewDate.getUTCMonth(),
                                q = this.viewDate.getUTCDate(), r = this.viewDate.getUTCHours(),
                                k = this.viewDate.getUTCMinutes(), s = this.viewDate.getUTCSeconds();
                            if (n.is(".month")) {
                                this.viewDate.setUTCDate(1);
                                o = n.parent().find("span").index(n);
                                q = this.viewDate.getUTCDate();
                                this.viewDate.setUTCMonth(o);
                                this.element.trigger({type: "changeMonth", date: this.viewDate});
                                if (this.viewSelect >= 3) {
                                    this._setDate(h(p, o, q, r, k, s, 0))
                                }
                            } else {
                                if (n.is(".year")) {
                                    this.viewDate.setUTCDate(1);
                                    p = parseInt(n.text(), 10) || 0;
                                    this.viewDate.setUTCFullYear(p);
                                    this.element.trigger({type: "changeYear", date: this.viewDate});
                                    if (this.viewSelect >= 4) {
                                        this._setDate(h(p, o, q, r, k, s, 0))
                                    }
                                } else {
                                    if (n.is(".hour")) {
                                        r = parseInt(n.text(), 10) || 0;
                                        if (n.hasClass("hour_am") || n.hasClass("hour_pm")) {
                                            if (r === 12 && n.hasClass("hour_am")) {
                                                r = 0
                                            } else {
                                                if (r !== 12 && n.hasClass("hour_pm")) {
                                                    r += 12
                                                }
                                            }
                                        }
                                        this.viewDate.setUTCHours(r);
                                        this.element.trigger({type: "changeHour", date: this.viewDate});
                                        if (this.viewSelect >= 1) {
                                            this._setDate(h(p, o, q, r, k, s, 0))
                                        }
                                    } else {
                                        if (n.is(".minute")) {
                                            k = parseInt(n.text().substr(n.text().indexOf(":") + 1), 10) || 0;
                                            this.viewDate.setUTCMinutes(k);
                                            this.element.trigger({type: "changeMinute", date: this.viewDate});
                                            if (this.viewSelect >= 0) {
                                                this._setDate(h(p, o, q, r, k, s, 0))
                                            }
                                        }
                                    }
                                }
                            }
                            if (this.viewMode !== 0) {
                                var l = this.viewMode;
                                this.showMode(-1);
                                this.fill();
                                if (l === this.viewMode && this.autoclose) {
                                    this.hide()
                                }
                            } else {
                                this.fill();
                                if (this.autoclose) {
                                    this.hide()
                                }
                            }
                        }
                        break;
                    case"td":
                        if (n.is(".day") && !n.is(".disabled")) {
                            var q = parseInt(n.text(), 10) || 1;
                            var p = this.viewDate.getUTCFullYear(), o = this.viewDate.getUTCMonth(),
                                r = this.viewDate.getUTCHours(), k = this.viewDate.getUTCMinutes(),
                                s = this.viewDate.getUTCSeconds();
                            if (n.is(".old")) {
                                if (o === 0) {
                                    o = 11;
                                    p -= 1
                                } else {
                                    o -= 1
                                }
                            } else {
                                if (n.is(".new")) {
                                    if (o === 11) {
                                        o = 0;
                                        p += 1
                                    } else {
                                        o += 1
                                    }
                                }
                            }
                            this.viewDate.setUTCFullYear(p);
                            this.viewDate.setUTCMonth(o, q);
                            this.element.trigger({type: "changeDay", date: this.viewDate});
                            if (this.viewSelect >= 2) {
                                this._setDate(h(p, o, q, r, k, s, 0))
                            }
                        }
                        var l = this.viewMode;
                        this.showMode(-1);
                        this.fill();
                        if (l === this.viewMode && this.autoclose) {
                            this.hide()
                        }
                        break
                }
            }
        }, _setDate: function (i, k) {
            if (!k || k === "date") {
                this.date = i
            }
            if (!k || k === "view") {
                this.viewDate = i
            }
            this.fill();
            this.setValue();
            var j;
            if (this.isInput) {
                j = this.element
            } else {
                if (this.component) {
                    j = this.element.find("input")
                }
            }
            if (j) {
                j.change()
            }
            this.element.trigger({type: "changeDate", date: this.getDate()});
            if (i === null) {
                this.date = this.viewDate
            }
        }, moveMinute: function (j, i) {
            if (!i) {
                return j
            }
            var k = new Date(j.valueOf());
            k.setUTCMinutes(k.getUTCMinutes() + (i * this.minuteStep));
            return k
        }, moveHour: function (j, i) {
            if (!i) {
                return j
            }
            var k = new Date(j.valueOf());
            k.setUTCHours(k.getUTCHours() + i);
            return k
        }, moveDate: function (j, i) {
            if (!i) {
                return j
            }
            var k = new Date(j.valueOf());
            k.setUTCDate(k.getUTCDate() + i);
            return k
        }, moveMonth: function (j, k) {
            if (!k) {
                return j
            }
            var n = new Date(j.valueOf()), r = n.getUTCDate(), o = n.getUTCMonth(), m = Math.abs(k), q, p;
            k = k > 0 ? 1 : -1;
            if (m === 1) {
                p = k === -1 ? function () {
                    return n.getUTCMonth() === o
                } : function () {
                    return n.getUTCMonth() !== q
                };
                q = o + k;
                n.setUTCMonth(q);
                if (q < 0 || q > 11) {
                    q = (q + 12) % 12
                }
            } else {
                for (var l = 0; l < m; l++) {
                    n = this.moveMonth(n, k)
                }
                q = n.getUTCMonth();
                n.setUTCDate(r);
                p = function () {
                    return q !== n.getUTCMonth()
                }
            }
            while (p()) {
                n.setUTCDate(--r);
                n.setUTCMonth(q)
            }
            return n
        }, moveYear: function (j, i) {
            return this.moveMonth(j, i * 12)
        }, dateWithinRange: function (i) {
            return i >= this.startDate && i <= this.endDate
        }, keydown: function (o) {
            if (this.picker.is(":not(:visible)")) {
                if (o.keyCode === 27) {
                    this.show()
                }
                return
            }
            var k = false, j, i, n;
            switch (o.keyCode) {
                case 27:
                    this.hide();
                    o.preventDefault();
                    break;
                case 37:
                case 39:
                    if (!this.keyboardNavigation) {
                        break
                    }
                    j = o.keyCode === 37 ? -1 : 1;
                    var m = this.viewMode;
                    if (o.ctrlKey) {
                        m += 2
                    } else {
                        if (o.shiftKey) {
                            m += 1
                        }
                    }
                    if (m === 4) {
                        i = this.moveYear(this.date, j);
                        n = this.moveYear(this.viewDate, j)
                    } else {
                        if (m === 3) {
                            i = this.moveMonth(this.date, j);
                            n = this.moveMonth(this.viewDate, j)
                        } else {
                            if (m === 2) {
                                i = this.moveDate(this.date, j);
                                n = this.moveDate(this.viewDate, j)
                            } else {
                                if (m === 1) {
                                    i = this.moveHour(this.date, j);
                                    n = this.moveHour(this.viewDate, j)
                                } else {
                                    if (m === 0) {
                                        i = this.moveMinute(this.date, j);
                                        n = this.moveMinute(this.viewDate, j)
                                    }
                                }
                            }
                        }
                    }
                    if (this.dateWithinRange(i)) {
                        this.date = i;
                        this.viewDate = n;
                        this.setValue();
                        this.update();
                        o.preventDefault();
                        k = true
                    }
                    break;
                case 38:
                case 40:
                    if (!this.keyboardNavigation) {
                        break
                    }
                    j = o.keyCode === 38 ? -1 : 1;
                    m = this.viewMode;
                    if (o.ctrlKey) {
                        m += 2
                    } else {
                        if (o.shiftKey) {
                            m += 1
                        }
                    }
                    if (m === 4) {
                        i = this.moveYear(this.date, j);
                        n = this.moveYear(this.viewDate, j)
                    } else {
                        if (m === 3) {
                            i = this.moveMonth(this.date, j);
                            n = this.moveMonth(this.viewDate, j)
                        } else {
                            if (m === 2) {
                                i = this.moveDate(this.date, j * 7);
                                n = this.moveDate(this.viewDate, j * 7)
                            } else {
                                if (m === 1) {
                                    if (this.showMeridian) {
                                        i = this.moveHour(this.date, j * 6);
                                        n = this.moveHour(this.viewDate, j * 6)
                                    } else {
                                        i = this.moveHour(this.date, j * 4);
                                        n = this.moveHour(this.viewDate, j * 4)
                                    }
                                } else {
                                    if (m === 0) {
                                        i = this.moveMinute(this.date, j * 4);
                                        n = this.moveMinute(this.viewDate, j * 4)
                                    }
                                }
                            }
                        }
                    }
                    if (this.dateWithinRange(i)) {
                        this.date = i;
                        this.viewDate = n;
                        this.setValue();
                        this.update();
                        o.preventDefault();
                        k = true
                    }
                    break;
                case 13:
                    if (this.viewMode !== 0) {
                        var p = this.viewMode;
                        this.showMode(-1);
                        this.fill();
                        if (p === this.viewMode && this.autoclose) {
                            this.hide()
                        }
                    } else {
                        this.fill();
                        if (this.autoclose) {
                            this.hide()
                        }
                    }
                    o.preventDefault();
                    break;
                case 9:
                    this.hide();
                    break
            }
            if (k) {
                var l;
                if (this.isInput) {
                    l = this.element
                } else {
                    if (this.component) {
                        l = this.element.find("input")
                    }
                }
                if (l) {
                    l.change()
                }
                this.element.trigger({type: "changeDate", date: this.getDate()})
            }
        }, showMode: function (i) {
            if (i) {
                var j = Math.max(0, Math.min(c.modes.length - 1, this.viewMode + i));
                if (j >= this.minView && j <= this.maxView) {
                    this.element.trigger({
                        type: "changeMode",
                        date: this.viewDate,
                        oldViewMode: this.viewMode,
                        newViewMode: j
                    });
                    this.viewMode = j
                }
            }
            this.picker.find(">div").hide().filter(".datetimepicker-" + c.modes[this.viewMode].clsName).css("display", "block");
            this.updateNavArrows()
        }, reset: function () {
            this._setDate(null, "date")
        }, convertViewModeText: function (i) {
            switch (i) {
                case 4:
                    return "decade";
                case 3:
                    return "year";
                case 2:
                    return "month";
                case 1:
                    return "day";
                case 0:
                    return "hour"
            }
        }
    };
    var b = d.fn.datetimepicker;
    d.fn.datetimepicker = function (k) {
        var i = Array.apply(null, arguments);
        i.shift();
        var j;
        this.each(function () {
            var n = d(this), m = n.data("datetimepicker"), l = typeof k === "object" && k;
            if (!m) {
                n.data("datetimepicker", (m = new g(this, d.extend({}, d.fn.datetimepicker.defaults, l))))
            }
            if (typeof k === "string" && typeof m[k] === "function") {
                j = m[k].apply(m, i);
                if (j !== f) {
                    return false
                }
            }
        });
        if (j !== f) {
            return j
        } else {
            return this
        }
    };
    d.fn.datetimepicker.defaults = {};
    d.fn.datetimepicker.Constructor = g;
    var e = d.fn.datetimepicker.dates = {
        en: {
            days: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            daysShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
            daysMin: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa", "Su"],
            months: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            monthsShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            meridiem: ["am", "pm"],
            suffix: ["st", "nd", "rd", "th"],
            today: "Today",
            clear: "Clear"
        }
    };
    var c = {
        modes: [{clsName: "minutes", navFnc: "Hours", navStep: 1}, {
            clsName: "hours",
            navFnc: "Date",
            navStep: 1
        }, {clsName: "days", navFnc: "Month", navStep: 1}, {
            clsName: "months",
            navFnc: "FullYear",
            navStep: 1
        }, {clsName: "years", navFnc: "FullYear", navStep: 10}],
        isLeapYear: function (i) {
            return (((i % 4 === 0) && (i % 100 !== 0)) || (i % 400 === 0))
        },
        getDaysInMonth: function (i, j) {
            return [31, (c.isLeapYear(i) ? 29 : 28), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31][j]
        },
        getDefaultFormat: function (i, j) {
            if (i === "standard") {
                if (j === "input") {
                    return "yyyy-mm-dd hh:ii"
                } else {
                    return "yyyy-mm-dd hh:ii:ss"
                }
            } else {
                if (i === "php") {
                    if (j === "input") {
                        return "Y-m-d H:i"
                    } else {
                        return "Y-m-d H:i:s"
                    }
                } else {
                    throw new Error("Invalid format type.")
                }
            }
        },
        validParts: function (i) {
            if (i === "standard") {
                return /t|hh?|HH?|p|P|z|Z|ii?|ss?|dd?|DD?|mm?|MM?|yy(?:yy)?/g
            } else {
                if (i === "php") {
                    return /[dDjlNwzFmMnStyYaABgGhHis]/g
                } else {
                    throw new Error("Invalid format type.")
                }
            }
        },
        nonpunctuation: /[^ -\/:-@\[-`{-~\t\n\rTZ]+/g,
        parseFormat: function (l, j) {
            var i = l.replace(this.validParts(j), "\0").split("\0"), k = l.match(this.validParts(j));
            if (!i || !i.length || !k || k.length === 0) {
                throw new Error("Invalid date format.")
            }
            return {separators: i, parts: k}
        },
        parseDate: function (A, y, v, j, r) {
            if (A instanceof Date) {
                var u = new Date(A.valueOf() - A.getTimezoneOffset() * 60000);
                u.setMilliseconds(0);
                return u
            }
            if (/^\d{4}\-\d{1,2}\-\d{1,2}$/.test(A)) {
                y = this.parseFormat("yyyy-mm-dd", j)
            }
            if (/^\d{4}\-\d{1,2}\-\d{1,2}[T ]\d{1,2}\:\d{1,2}$/.test(A)) {
                y = this.parseFormat("yyyy-mm-dd hh:ii", j)
            }
            if (/^\d{4}\-\d{1,2}\-\d{1,2}[T ]\d{1,2}\:\d{1,2}\:\d{1,2}[Z]{0,1}$/.test(A)) {
                y = this.parseFormat("yyyy-mm-dd hh:ii:ss", j)
            }
            if (/^[-+]\d+[dmwy]([\s,]+[-+]\d+[dmwy])*$/.test(A)) {
                var l = /([-+]\d+)([dmwy])/, q = A.match(/([-+]\d+)([dmwy])/g), t, p;
                A = new Date();
                for (var x = 0; x < q.length; x++) {
                    t = l.exec(q[x]);
                    p = parseInt(t[1]);
                    switch (t[2]) {
                        case"d":
                            A.setUTCDate(A.getUTCDate() + p);
                            break;
                        case"m":
                            A = g.prototype.moveMonth.call(g.prototype, A, p);
                            break;
                        case"w":
                            A.setUTCDate(A.getUTCDate() + p * 7);
                            break;
                        case"y":
                            A = g.prototype.moveYear.call(g.prototype, A, p);
                            break
                    }
                }
                return h(A.getUTCFullYear(), A.getUTCMonth(), A.getUTCDate(), A.getUTCHours(), A.getUTCMinutes(), A.getUTCSeconds(), 0)
            }
            var q = A && A.toString().match(this.nonpunctuation) || [], A = new Date(0, 0, 0, 0, 0, 0, 0), m = {},
                z = ["hh", "h", "ii", "i", "ss", "s", "yyyy", "yy", "M", "MM", "m", "mm", "D", "DD", "d", "dd", "H", "HH", "p", "P", "z", "Z"],
                o = {
                    hh: function (s, i) {
                        return s.setUTCHours(i)
                    }, h: function (s, i) {
                        return s.setUTCHours(i)
                    }, HH: function (s, i) {
                        return s.setUTCHours(i === 12 ? 0 : i)
                    }, H: function (s, i) {
                        return s.setUTCHours(i === 12 ? 0 : i)
                    }, ii: function (s, i) {
                        return s.setUTCMinutes(i)
                    }, i: function (s, i) {
                        return s.setUTCMinutes(i)
                    }, ss: function (s, i) {
                        return s.setUTCSeconds(i)
                    }, s: function (s, i) {
                        return s.setUTCSeconds(i)
                    }, yyyy: function (s, i) {
                        return s.setUTCFullYear(i)
                    }, yy: function (s, i) {
                        return s.setUTCFullYear(2000 + i)
                    }, m: function (s, i) {
                        i -= 1;
                        while (i < 0) {
                            i += 12
                        }
                        i %= 12;
                        s.setUTCMonth(i);
                        while (s.getUTCMonth() !== i) {
                            if (isNaN(s.getUTCMonth())) {
                                return s
                            } else {
                                s.setUTCDate(s.getUTCDate() - 1)
                            }
                        }
                        return s
                    }, d: function (s, i) {
                        return s.setUTCDate(i)
                    }, p: function (s, i) {
                        return s.setUTCHours(i === 1 ? s.getUTCHours() + 12 : s.getUTCHours())
                    }, z: function () {
                        return r
                    }
                }, B, k, t;
            o.M = o.MM = o.mm = o.m;
            o.dd = o.d;
            o.P = o.p;
            o.Z = o.z;
            A = h(A.getFullYear(), A.getMonth(), A.getDate(), A.getHours(), A.getMinutes(), A.getSeconds());
            if (q.length === y.parts.length) {
                for (var x = 0, w = y.parts.length; x < w; x++) {
                    B = parseInt(q[x], 10);
                    t = y.parts[x];
                    if (isNaN(B)) {
                        switch (t) {
                            case"MM":
                                k = d(e[v].months).filter(function () {
                                    var i = this.slice(0, q[x].length), s = q[x].slice(0, i.length);
                                    return i === s
                                });
                                B = d.inArray(k[0], e[v].months) + 1;
                                break;
                            case"M":
                                k = d(e[v].monthsShort).filter(function () {
                                    var i = this.slice(0, q[x].length), s = q[x].slice(0, i.length);
                                    return i.toLowerCase() === s.toLowerCase()
                                });
                                B = d.inArray(k[0], e[v].monthsShort) + 1;
                                break;
                            case"p":
                            case"P":
                                B = d.inArray(q[x].toLowerCase(), e[v].meridiem);
                                break;
                            case"z":
                            case"Z":
                                r;
                                break
                        }
                    }
                    m[t] = B
                }
                for (var x = 0, n; x < z.length; x++) {
                    n = z[x];
                    if (n in m && !isNaN(m[n])) {
                        o[n](A, m[n])
                    }
                }
            }
            return A
        },
        formatDate: function (l, q, m, p, o) {
            if (l === null) {
                return ""
            }
            var k;
            if (p === "standard") {
                k = {
                    t: l.getTime(),
                    yy: l.getUTCFullYear().toString().substring(2),
                    yyyy: l.getUTCFullYear(),
                    m: l.getUTCMonth() + 1,
                    M: e[m].monthsShort[l.getUTCMonth()],
                    MM: e[m].months[l.getUTCMonth()],
                    d: l.getUTCDate(),
                    D: e[m].daysShort[l.getUTCDay()],
                    DD: e[m].days[l.getUTCDay()],
                    p: (e[m].meridiem.length === 2 ? e[m].meridiem[l.getUTCHours() < 12 ? 0 : 1] : ""),
                    h: l.getUTCHours(),
                    i: l.getUTCMinutes(),
                    s: l.getUTCSeconds(),
                    z: o
                };
                if (e[m].meridiem.length === 2) {
                    k.H = (k.h % 12 === 0 ? 12 : k.h % 12)
                } else {
                    k.H = k.h
                }
                k.HH = (k.H < 10 ? "0" : "") + k.H;
                k.P = k.p.toUpperCase();
                k.Z = k.z;
                k.hh = (k.h < 10 ? "0" : "") + k.h;
                k.ii = (k.i < 10 ? "0" : "") + k.i;
                k.ss = (k.s < 10 ? "0" : "") + k.s;
                k.dd = (k.d < 10 ? "0" : "") + k.d;
                k.mm = (k.m < 10 ? "0" : "") + k.m
            } else {
                if (p === "php") {
                    k = {
                        y: l.getUTCFullYear().toString().substring(2),
                        Y: l.getUTCFullYear(),
                        F: e[m].months[l.getUTCMonth()],
                        M: e[m].monthsShort[l.getUTCMonth()],
                        n: l.getUTCMonth() + 1,
                        t: c.getDaysInMonth(l.getUTCFullYear(), l.getUTCMonth()),
                        j: l.getUTCDate(),
                        l: e[m].days[l.getUTCDay()],
                        D: e[m].daysShort[l.getUTCDay()],
                        w: l.getUTCDay(),
                        N: (l.getUTCDay() === 0 ? 7 : l.getUTCDay()),
                        S: (l.getUTCDate() % 10 <= e[m].suffix.length ? e[m].suffix[l.getUTCDate() % 10 - 1] : ""),
                        a: (e[m].meridiem.length === 2 ? e[m].meridiem[l.getUTCHours() < 12 ? 0 : 1] : ""),
                        g: (l.getUTCHours() % 12 === 0 ? 12 : l.getUTCHours() % 12),
                        G: l.getUTCHours(),
                        i: l.getUTCMinutes(),
                        s: l.getUTCSeconds()
                    };
                    k.m = (k.n < 10 ? "0" : "") + k.n;
                    k.d = (k.j < 10 ? "0" : "") + k.j;
                    k.A = k.a.toString().toUpperCase();
                    k.h = (k.g < 10 ? "0" : "") + k.g;
                    k.H = (k.G < 10 ? "0" : "") + k.G;
                    k.i = (k.i < 10 ? "0" : "") + k.i;
                    k.s = (k.s < 10 ? "0" : "") + k.s
                } else {
                    throw new Error("Invalid format type.")
                }
            }
            var l = [], r = d.extend([], q.separators);
            for (var n = 0, j = q.parts.length; n < j; n++) {
                if (r.length) {
                    l.push(r.shift())
                }
                l.push(k[q.parts[n]])
            }
            if (r.length) {
                l.push(r.shift())
            }
            return l.join("")
        },
        convertViewMode: function (i) {
            switch (i) {
                case 4:
                case"decade":
                    i = 4;
                    break;
                case 3:
                case"year":
                    i = 3;
                    break;
                case 2:
                case"month":
                    i = 2;
                    break;
                case 1:
                case"day":
                    i = 1;
                    break;
                case 0:
                case"hour":
                    i = 0;
                    break
            }
            return i
        },
        headTemplate: '<thead><tr><th class="prev"><i class="{iconType} {leftArrow}"/></th><th colspan="5" class="switch"></th><th class="next"><i class="{iconType} {rightArrow}"/></th></tr></thead>',
        headTemplateV3: '<thead><tr><th class="prev"><span class="{iconType} {leftArrow}"></span> </th><th colspan="5" class="switch"></th><th class="next"><span class="{iconType} {rightArrow}"></span> </th></tr></thead>',
        contTemplate: '<tbody><tr><td colspan="7"></td></tr></tbody>',
        footTemplate: '<tfoot><tr><th colspan="7" class="today"></th></tr><tr><th colspan="7" class="clear"></th></tr></tfoot>'
    };
    c.template = '<div class="datetimepicker"><div class="datetimepicker-minutes"><table class=" table-condensed">' + c.headTemplate + c.contTemplate + c.footTemplate + '</table></div><div class="datetimepicker-hours"><table class=" table-condensed">' + c.headTemplate + c.contTemplate + c.footTemplate + '</table></div><div class="datetimepicker-days"><table class=" table-condensed">' + c.headTemplate + "<tbody></tbody>" + c.footTemplate + '</table></div><div class="datetimepicker-months"><table class="table-condensed">' + c.headTemplate + c.contTemplate + c.footTemplate + '</table></div><div class="datetimepicker-years"><table class="table-condensed">' + c.headTemplate + c.contTemplate + c.footTemplate + "</table></div></div>";
    c.templateV3 = '<div class="datetimepicker"><div class="datetimepicker-minutes"><table class=" table-condensed">' + c.headTemplateV3 + c.contTemplate + c.footTemplate + '</table></div><div class="datetimepicker-hours"><table class=" table-condensed">' + c.headTemplateV3 + c.contTemplate + c.footTemplate + '</table></div><div class="datetimepicker-days"><table class=" table-condensed">' + c.headTemplateV3 + "<tbody></tbody>" + c.footTemplate + '</table></div><div class="datetimepicker-months"><table class="table-condensed">' + c.headTemplateV3 + c.contTemplate + c.footTemplate + '</table></div><div class="datetimepicker-years"><table class="table-condensed">' + c.headTemplateV3 + c.contTemplate + c.footTemplate + "</table></div></div>";
    d.fn.datetimepicker.DPGlobal = c;
    d.fn.datetimepicker.noConflict = function () {
        d.fn.datetimepicker = b;
        return this
    };
    d(document).on("focus.datetimepicker.data-api click.datetimepicker.data-api", '[data-provide="datetimepicker"]', function (j) {
        var i = d(this);
        if (i.data("datetimepicker")) {
            return
        }
        j.preventDefault();
        i.datetimepicker("show")
    });
    d(function () {
        d('[data-provide="datetimepicker-inline"]').datetimepicker()
    })
}));

// bootstrap.js v3.0.0 trimmed for datetime pick widget

if (!jQuery) throw new Error("Bootstrap requires jQuery");
+function (a) {
    "use strict";

    function b() {
        var a = document.createElement("bootstrap"), b = {
            WebkitTransition: "webkitTransitionEnd",
            MozTransition: "transitionend",
            OTransition: "oTransitionEnd otransitionend",
            transition: "transitionend"
        };
        for (var c in b) if (void 0 !== a.style[c]) return {end: b[c]}
    }

    a.fn.emulateTransitionEnd = function (b) {
        var c = !1, d = this;
        a(this).one(a.support.transition.end, function () {
            c = !0
        });
        var e = function () {
            c || a(d).trigger(a.support.transition.end)
        };
        return setTimeout(e, b), this
    }, a(function () {
        a.support.transition = b()
    })
}(window.jQuery), +function (a) {
    "use strict";
    var b = '[data-dismiss="alert"]', c = function (c) {
        a(c).on("click", b, this.close)
    };
    c.prototype.close = function (b) {
        function c() {
            f.trigger("closed.bs.alert").remove()
        }

        var d = a(this), e = d.attr("data-target");
        e || (e = d.attr("href"), e = e && e.replace(/.*(?=#[^\s]*$)/, ""));
        var f = a(e);
        b && b.preventDefault(), f.length || (f = d.hasClass("alert") ? d : d.parent()), f.trigger(b = a.Event("close.bs.alert")), b.isDefaultPrevented() || (f.removeClass("in"), a.support.transition && f.hasClass("fade") ? f.one(a.support.transition.end, c).emulateTransitionEnd(150) : c())
    };
    var d = a.fn.alert;
    a.fn.alert = function (b) {
        return this.each(function () {
            var d = a(this), e = d.data("bs.alert");
            e || d.data("bs.alert", e = new c(this)), "string" == typeof b && e[b].call(d)
        })
    }, a.fn.alert.Constructor = c, a.fn.alert.noConflict = function () {
        return a.fn.alert = d, this
    }, a(document).on("click.bs.alert.data-api", b, c.prototype.close)
}(window.jQuery), +function (a) {
    "use strict";
    var b = function (c, d) {
        this.$element = a(c), this.options = a.extend({}, b.DEFAULTS, d)
    };
    b.DEFAULTS = {loadingText: "loading..."}, b.prototype.setState = function (a) {
        var b = "disabled", c = this.$element, d = c.is("input") ? "val" : "html", e = c.data();
        a += "Text", e.resetText || c.data("resetText", c[d]()), c[d](e[a] || this.options[a]), setTimeout(function () {
            "loadingText" == a ? c.addClass(b).attr(b, b) : c.removeClass(b).removeAttr(b)
        }, 0)
    }, b.prototype.toggle = function () {
        var a = this.$element.closest('[data-toggle="buttons"]');
        if (a.length) {
            var b = this.$element.find("input").prop("checked", !this.$element.hasClass("active")).trigger("change");
            "radio" === b.prop("type") && a.find(".active").removeClass("active")
        }
        this.$element.toggleClass("active")
    };
    var c = a.fn.button;
    a.fn.button = function (c) {
        return this.each(function () {
            var d = a(this), e = d.data("bs.button"), f = "object" == typeof c && c;
            e || d.data("bs.button", e = new b(this, f)), "toggle" == c ? e.toggle() : c && e.setState(c)
        })
    }, a.fn.button.Constructor = b, a.fn.button.noConflict = function () {
        return a.fn.button = c, this
    }, a(document).on("click.bs.button.data-api", "[data-toggle^=button]", function (b) {
        var c = a(b.target);
        c.hasClass("btn") || (c = c.closest(".btn")), c.button("toggle"), b.preventDefault()
    })
}(window.jQuery), +function (a) {
    "use strict";
    var b = function (b, c) {
        this.$element = a(b), this.$indicators = this.$element.find(".carousel-indicators"), this.options = c, this.paused = this.sliding = this.interval = this.$active = this.$items = null, "hover" == this.options.pause && this.$element.on("mouseenter", a.proxy(this.pause, this)).on("mouseleave", a.proxy(this.cycle, this))
    };
    b.DEFAULTS = {interval: 5e3, pause: "hover", wrap: !0}, b.prototype.cycle = function (b) {
        return b || (this.paused = !1), this.interval && clearInterval(this.interval), this.options.interval && !this.paused && (this.interval = setInterval(a.proxy(this.next, this), this.options.interval)), this
    }, b.prototype.getActiveIndex = function () {
        return this.$active = this.$element.find(".item.active"), this.$items = this.$active.parent().children(), this.$items.index(this.$active)
    }, b.prototype.to = function (b) {
        var c = this, d = this.getActiveIndex();
        return b > this.$items.length - 1 || 0 > b ? void 0 : this.sliding ? this.$element.one("slid", function () {
            c.to(b)
        }) : d == b ? this.pause().cycle() : this.slide(b > d ? "next" : "prev", a(this.$items[b]))
    }, b.prototype.pause = function (b) {
        return b || (this.paused = !0), this.$element.find(".next, .prev").length && a.support.transition.end && (this.$element.trigger(a.support.transition.end), this.cycle(!0)), this.interval = clearInterval(this.interval), this
    }, b.prototype.next = function () {
        return this.sliding ? void 0 : this.slide("next")
    }, b.prototype.prev = function () {
        return this.sliding ? void 0 : this.slide("prev")
    }, b.prototype.slide = function (b, c) {
        var d = this.$element.find(".item.active"), e = c || d[b](), f = this.interval,
            g = "next" == b ? "left" : "right", h = "next" == b ? "first" : "last", i = this;
        if (!e.length) {
            if (!this.options.wrap) return;
            e = this.$element.find(".item")[h]()
        }
        this.sliding = !0, f && this.pause();
        var j = a.Event("slide.bs.carousel", {relatedTarget: e[0], direction: g});
        if (!e.hasClass("active")) {
            if (this.$indicators.length && (this.$indicators.find(".active").removeClass("active"), this.$element.one("slid", function () {
                var b = a(i.$indicators.children()[i.getActiveIndex()]);
                b && b.addClass("active")
            })), a.support.transition && this.$element.hasClass("slide")) {
                if (this.$element.trigger(j), j.isDefaultPrevented()) return;
                e.addClass(b), e[0].offsetWidth, d.addClass(g), e.addClass(g), d.one(a.support.transition.end, function () {
                    e.removeClass([b, g].join(" ")).addClass("active"), d.removeClass(["active", g].join(" ")), i.sliding = !1, setTimeout(function () {
                        i.$element.trigger("slid")
                    }, 0)
                }).emulateTransitionEnd(600)
            } else {
                if (this.$element.trigger(j), j.isDefaultPrevented()) return;
                d.removeClass("active"), e.addClass("active"), this.sliding = !1, this.$element.trigger("slid")
            }
            return f && this.cycle(), this
        }
    };
    var c = a.fn.carousel;
    a.fn.carousel = function (c) {
        return this.each(function () {
            var d = a(this), e = d.data("bs.carousel"),
                f = a.extend({}, b.DEFAULTS, d.data(), "object" == typeof c && c),
                g = "string" == typeof c ? c : f.slide;
            e || d.data("bs.carousel", e = new b(this, f)), "number" == typeof c ? e.to(c) : g ? e[g]() : f.interval && e.pause().cycle()
        })
    }, a.fn.carousel.Constructor = b, a.fn.carousel.noConflict = function () {
        return a.fn.carousel = c, this
    }, a(document).on("click.bs.carousel.data-api", "[data-slide], [data-slide-to]", function (b) {
        var c, d = a(this), e = a(d.attr("data-target") || (c = d.attr("href")) && c.replace(/.*(?=#[^\s]+$)/, "")),
            f = a.extend({}, e.data(), d.data()), g = d.attr("data-slide-to");
        g && (f.interval = !1), e.carousel(f), (g = d.attr("data-slide-to")) && e.data("bs.carousel").to(g), b.preventDefault()
    }), a(window).on("load", function () {
        a('[data-ride="carousel"]').each(function () {
            var b = a(this);
            b.carousel(b.data())
        })
    })
}(window.jQuery), +function (a) {
    "use strict";
    var b = function (c, d) {
        this.$element = a(c), this.options = a.extend({}, b.DEFAULTS, d), this.transitioning = null, this.options.parent && (this.$parent = a(this.options.parent)), this.options.toggle && this.toggle()
    };
    b.DEFAULTS = {toggle: !0}, b.prototype.dimension = function () {
        var a = this.$element.hasClass("width");
        return a ? "width" : "height"
    }, b.prototype.show = function () {
        if (!this.transitioning && !this.$element.hasClass("in")) {
            var b = a.Event("show.bs.collapse");
            if (this.$element.trigger(b), !b.isDefaultPrevented()) {
                var c = this.$parent && this.$parent.find("> .panel > .in");
                if (c && c.length) {
                    var d = c.data("bs.collapse");
                    if (d && d.transitioning) return;
                    c.collapse("hide"), d || c.data("bs.collapse", null)
                }
                var e = this.dimension();
                this.$element.removeClass("collapse").addClass("collapsing")[e](0), this.transitioning = 1;
                var f = function () {
                    this.$element.removeClass("collapsing").addClass("in")[e]("auto"), this.transitioning = 0, this.$element.trigger("shown.bs.collapse")
                };
                if (!a.support.transition) return f.call(this);
                var g = a.camelCase(["scroll", e].join("-"));
                this.$element.one(a.support.transition.end, a.proxy(f, this)).emulateTransitionEnd(350)[e](this.$element[0][g])
            }
        }
    }, b.prototype.hide = function () {
        if (!this.transitioning && this.$element.hasClass("in")) {
            var b = a.Event("hide.bs.collapse");
            if (this.$element.trigger(b), !b.isDefaultPrevented()) {
                var c = this.dimension();
                this.$element[c](this.$element[c]())[0].offsetHeight, this.$element.addClass("collapsing").removeClass("collapse").removeClass("in"), this.transitioning = 1;
                var d = function () {
                    this.transitioning = 0, this.$element.trigger("hidden.bs.collapse").removeClass("collapsing").addClass("collapse")
                };
                return a.support.transition ? (this.$element[c](0).one(a.support.transition.end, a.proxy(d, this)).emulateTransitionEnd(350), void 0) : d.call(this)
            }
        }
    }, b.prototype.toggle = function () {
        this[this.$element.hasClass("in") ? "hide" : "show"]()
    };
    var c = a.fn.collapse;
    a.fn.collapse = function (c) {
        return this.each(function () {
            var d = a(this), e = d.data("bs.collapse"),
                f = a.extend({}, b.DEFAULTS, d.data(), "object" == typeof c && c);
            e || d.data("bs.collapse", e = new b(this, f)), "string" == typeof c && e[c]()
        })
    }, a.fn.collapse.Constructor = b, a.fn.collapse.noConflict = function () {
        return a.fn.collapse = c, this
    }, a(document).on("click.bs.collapse.data-api", "[data-toggle=collapse]", function (b) {
        var c, d = a(this),
            e = d.attr("data-target") || b.preventDefault() || (c = d.attr("href")) && c.replace(/.*(?=#[^\s]+$)/, ""),
            f = a(e), g = f.data("bs.collapse"), h = g ? "toggle" : d.data(), i = d.attr("data-parent"), j = i && a(i);
        g && g.transitioning || (j && j.find('[data-toggle=collapse][data-parent="' + i + '"]').not(d).addClass("collapsed"), d[f.hasClass("in") ? "addClass" : "removeClass"]("collapsed")), f.collapse(h)
    })
}(window.jQuery), +function (a) {
    "use strict";

    function b() {
        a(d).remove(), a(e).each(function (b) {
            var d = c(a(this));
            d.hasClass("open") && (d.trigger(b = a.Event("hide.bs.dropdown")), b.isDefaultPrevented() || d.removeClass("open").trigger("hidden.bs.dropdown"))
        })
    }

    function c(b) {
        var c = b.attr("data-target");
        c || (c = b.attr("href"), c = c && /#/.test(c) && c.replace(/.*(?=#[^\s]*$)/, ""));
        var d = c && a(c);
        return d && d.length ? d : b.parent()
    }

    var d = ".dropdown-backdrop", e = "[data-toggle=dropdown]", f = function (b) {
        a(b).on("click.bs.dropdown", this.toggle)
    };
    f.prototype.toggle = function (d) {
        var e = a(this);
        if (!e.is(".disabled, :disabled")) {
            var f = c(e), g = f.hasClass("open");
            if (b(), !g) {
                if ("ontouchstart" in document.documentElement && !f.closest(".navbar-nav").length && a('<div class="dropdown-backdrop"/>').insertAfter(a(this)).on("click", b), f.trigger(d = a.Event("show.bs.dropdown")), d.isDefaultPrevented()) return;
                f.toggleClass("open").trigger("shown.bs.dropdown"), e.focus()
            }
            return !1
        }
    }, f.prototype.keydown = function (b) {
        if (/(38|40|27)/.test(b.keyCode)) {
            var d = a(this);
            if (b.preventDefault(), b.stopPropagation(), !d.is(".disabled, :disabled")) {
                var f = c(d), g = f.hasClass("open");
                if (!g || g && 27 == b.keyCode) return 27 == b.which && f.find(e).focus(), d.click();
                var h = a("[role=menu] li:not(.divider):visible a", f);
                if (h.length) {
                    var i = h.index(h.filter(":focus"));
                    38 == b.keyCode && i > 0 && i--, 40 == b.keyCode && i < h.length - 1 && i++, ~i || (i = 0), h.eq(i).focus()
                }
            }
        }
    };
    var g = a.fn.dropdown;
    a.fn.dropdown = function (b) {
        return this.each(function () {
            var c = a(this), d = c.data("dropdown");
            d || c.data("dropdown", d = new f(this)), "string" == typeof b && d[b].call(c)
        })
    }, a.fn.dropdown.Constructor = f, a.fn.dropdown.noConflict = function () {
        return a.fn.dropdown = g, this
    }, a(document).on("click.bs.dropdown.data-api", b).on("click.bs.dropdown.data-api", ".dropdown form", function (a) {
        a.stopPropagation()
    }).on("click.bs.dropdown.data-api", e, f.prototype.toggle).on("keydown.bs.dropdown.data-api", e + ", [role=menu]", f.prototype.keydown)
}(window.jQuery), +function (a) {
    "use strict";
    var b = function (b, c) {
        this.options = c, this.$element = a(b), this.$backdrop = this.isShown = null, this.options.remote && this.$element.load(this.options.remote)
    };
    b.DEFAULTS = {backdrop: !0, keyboard: !0, show: !0}, b.prototype.toggle = function (a) {
        return this[this.isShown ? "hide" : "show"](a)
    }, b.prototype.show = function (b) {
        var c = this, d = a.Event("show.bs.modal", {relatedTarget: b});
        this.$element.trigger(d), this.isShown || d.isDefaultPrevented() || (this.isShown = !0, this.escape(), this.$element.on("click.dismiss.modal", '[data-dismiss="modal"]', a.proxy(this.hide, this)), this.backdrop(function () {
            var d = a.support.transition && c.$element.hasClass("fade");
            c.$element.parent().length || c.$element.appendTo(document.body), c.$element.show(), d && c.$element[0].offsetWidth, c.$element.addClass("in").attr("aria-hidden", !1), c.enforceFocus();
            var e = a.Event("shown.bs.modal", {relatedTarget: b});
            d ? c.$element.find(".modal-dialog").one(a.support.transition.end, function () {
                c.$element.focus().trigger(e)
            }).emulateTransitionEnd(300) : c.$element.focus().trigger(e)
        }))
    }, b.prototype.hide = function (b) {
        b && b.preventDefault(), b = a.Event("hide.bs.modal"), this.$element.trigger(b), this.isShown && !b.isDefaultPrevented() && (this.isShown = !1, this.escape(), a(document).off("focusin.bs.modal"), this.$element.removeClass("in").attr("aria-hidden", !0).off("click.dismiss.modal"), a.support.transition && this.$element.hasClass("fade") ? this.$element.one(a.support.transition.end, a.proxy(this.hideModal, this)).emulateTransitionEnd(300) : this.hideModal())
    }, b.prototype.enforceFocus = function () {
        a(document).off("focusin.bs.modal").on("focusin.bs.modal", a.proxy(function (a) {
            this.$element[0] === a.target || this.$element.has(a.target).length || this.$element.focus()
        }, this))
    }, b.prototype.escape = function () {
        this.isShown && this.options.keyboard ? this.$element.on("keyup.dismiss.bs.modal", a.proxy(function (a) {
            27 == a.which && this.hide()
        }, this)) : this.isShown || this.$element.off("keyup.dismiss.bs.modal")
    }, b.prototype.hideModal = function () {
        var a = this;
        this.$element.hide(), this.backdrop(function () {
            a.removeBackdrop(), a.$element.trigger("hidden.bs.modal")
        })
    }, b.prototype.removeBackdrop = function () {
        this.$backdrop && this.$backdrop.remove(), this.$backdrop = null
    }, b.prototype.backdrop = function (b) {
        var c = this.$element.hasClass("fade") ? "fade" : "";
        if (this.isShown && this.options.backdrop) {
            var d = a.support.transition && c;
            if (this.$backdrop = a('<div class="modal-backdrop ' + c + '" />').appendTo(document.body), this.$element.on("click.dismiss.modal", a.proxy(function (a) {
                a.target === a.currentTarget && ("static" == this.options.backdrop ? this.$element[0].focus.call(this.$element[0]) : this.hide.call(this))
            }, this)), d && this.$backdrop[0].offsetWidth, this.$backdrop.addClass("in"), !b) return;
            d ? this.$backdrop.one(a.support.transition.end, b).emulateTransitionEnd(150) : b()
        } else !this.isShown && this.$backdrop ? (this.$backdrop.removeClass("in"), a.support.transition && this.$element.hasClass("fade") ? this.$backdrop.one(a.support.transition.end, b).emulateTransitionEnd(150) : b()) : b && b()
    };
    var c = a.fn.modal;
    a.fn.modal = function (c, d) {
        return this.each(function () {
            var e = a(this), f = e.data("bs.modal"), g = a.extend({}, b.DEFAULTS, e.data(), "object" == typeof c && c);
            f || e.data("bs.modal", f = new b(this, g)), "string" == typeof c ? f[c](d) : g.show && f.show(d)
        })
    }, a.fn.modal.Constructor = b, a.fn.modal.noConflict = function () {
        return a.fn.modal = c, this
    }, a(document).on("click.bs.modal.data-api", '[data-toggle="modal"]', function (b) {
        var c = a(this), d = c.attr("href"), e = a(c.attr("data-target") || d && d.replace(/.*(?=#[^\s]+$)/, "")),
            f = e.data("modal") ? "toggle" : a.extend({remote: !/#/.test(d) && d}, e.data(), c.data());
        b.preventDefault(), e.modal(f, this).one("hide", function () {
            c.is(":visible") && c.focus()
        })
    }), a(document).on("show.bs.modal", ".modal", function () {
        a(document.body).addClass("modal-open")
    }).on("hidden.bs.modal", ".modal", function () {
        a(document.body).removeClass("modal-open")
    })
}(window.jQuery), +function (a) {
    "use strict";
    var b = function (a, b) {
        this.type = this.options = this.enabled = this.timeout = this.hoverState = this.$element = null, this.init("tooltip", a, b)
    };
    b.DEFAULTS = {
        animation: !0,
        placement: "top",
        selector: !1,
        template: '<div class="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
        trigger: "hover focus",
        title: "",
        delay: 0,
        html: !1,
        container: !1
    }, b.prototype.init = function (b, c, d) {
        this.enabled = !0, this.type = b, this.$element = a(c), this.options = this.getOptions(d);
        for (var e = this.options.trigger.split(" "), f = e.length; f--;) {
            var g = e[f];
            if ("click" == g) this.$element.on("click." + this.type, this.options.selector, a.proxy(this.toggle, this)); else if ("manual" != g) {
                var h = "hover" == g ? "mouseenter" : "focus", i = "hover" == g ? "mouseleave" : "blur";
                this.$element.on(h + "." + this.type, this.options.selector, a.proxy(this.enter, this)), this.$element.on(i + "." + this.type, this.options.selector, a.proxy(this.leave, this))
            }
        }
        this.options.selector ? this._options = a.extend({}, this.options, {
            trigger: "manual",
            selector: ""
        }) : this.fixTitle()
    }, b.prototype.getDefaults = function () {
        return b.DEFAULTS
    }, b.prototype.getOptions = function (b) {
        return b = a.extend({}, this.getDefaults(), this.$element.data(), b), b.delay && "number" == typeof b.delay && (b.delay = {
            show: b.delay,
            hide: b.delay
        }), b
    }, b.prototype.getDelegateOptions = function () {
        var b = {}, c = this.getDefaults();
        return this._options && a.each(this._options, function (a, d) {
            c[a] != d && (b[a] = d)
        }), b
    }, b.prototype.enter = function (b) {
        var c = b instanceof this.constructor ? b : a(b.currentTarget)[this.type](this.getDelegateOptions()).data("bs." + this.type);
        return clearTimeout(c.timeout), c.hoverState = "in", c.options.delay && c.options.delay.show ? (c.timeout = setTimeout(function () {
            "in" == c.hoverState && c.show()
        }, c.options.delay.show), void 0) : c.show()
    }, b.prototype.leave = function (b) {
        var c = b instanceof this.constructor ? b : a(b.currentTarget)[this.type](this.getDelegateOptions()).data("bs." + this.type);
        return clearTimeout(c.timeout), c.hoverState = "out", c.options.delay && c.options.delay.hide ? (c.timeout = setTimeout(function () {
            "out" == c.hoverState && c.hide()
        }, c.options.delay.hide), void 0) : c.hide()
    }, b.prototype.show = function () {
        var b = a.Event("show.bs." + this.type);
        if (this.hasContent() && this.enabled) {
            if (this.$element.trigger(b), b.isDefaultPrevented()) return;
            var c = this.tip();
            this.setContent(), this.options.animation && c.addClass("fade");
            var d = "function" == typeof this.options.placement ? this.options.placement.call(this, c[0], this.$element[0]) : this.options.placement,
                e = /\s?auto?\s?/i, f = e.test(d);
            f && (d = d.replace(e, "") || "top"), c.detach().css({
                top: 0,
                left: 0,
                display: "block"
            }).addClass(d), this.options.container ? c.appendTo(this.options.container) : c.insertAfter(this.$element);
            var g = this.getPosition(), h = c[0].offsetWidth, i = c[0].offsetHeight;
            if (f) {
                var j = this.$element.parent(), k = d,
                    l = document.documentElement.scrollTop || document.body.scrollTop,
                    m = "body" == this.options.container ? window.innerWidth : j.outerWidth(),
                    n = "body" == this.options.container ? window.innerHeight : j.outerHeight(),
                    o = "body" == this.options.container ? 0 : j.offset().left;
                d = "bottom" == d && g.top + g.height + i - l > n ? "top" : "top" == d && g.top - l - i < 0 ? "bottom" : "right" == d && g.right + h > m ? "left" : "left" == d && g.left - h < o ? "right" : d, c.removeClass(k).addClass(d)
            }
            var p = this.getCalculatedOffset(d, g, h, i);
            this.applyPlacement(p, d), this.$element.trigger("shown.bs." + this.type)
        }
    }, b.prototype.applyPlacement = function (a, b) {
        var c, d = this.tip(), e = d[0].offsetWidth, f = d[0].offsetHeight, g = parseInt(d.css("margin-top"), 10),
            h = parseInt(d.css("margin-left"), 10);
        isNaN(g) && (g = 0), isNaN(h) && (h = 0), a.top = a.top + g, a.left = a.left + h, d.offset(a).addClass("in");
        var i = d[0].offsetWidth, j = d[0].offsetHeight;
        if ("top" == b && j != f && (c = !0, a.top = a.top + f - j), /bottom|top/.test(b)) {
            var k = 0;
            a.left < 0 && (k = -2 * a.left, a.left = 0, d.offset(a), i = d[0].offsetWidth, j = d[0].offsetHeight), this.replaceArrow(k - e + i, i, "left")
        } else this.replaceArrow(j - f, j, "top");
        c && d.offset(a)
    }, b.prototype.replaceArrow = function (a, b, c) {
        this.arrow().css(c, a ? 50 * (1 - a / b) + "%" : "")
    }, b.prototype.setContent = function () {
        var a = this.tip(), b = this.getTitle();
        a.find(".tooltip-inner")[this.options.html ? "html" : "text"](b), a.removeClass("fade in top bottom left right")
    }, b.prototype.hide = function () {
        function b() {
            "in" != c.hoverState && d.detach()
        }

        var c = this, d = this.tip(), e = a.Event("hide.bs." + this.type);
        return this.$element.trigger(e), e.isDefaultPrevented() ? void 0 : (d.removeClass("in"), a.support.transition && this.$tip.hasClass("fade") ? d.one(a.support.transition.end, b).emulateTransitionEnd(150) : b(), this.$element.trigger("hidden.bs." + this.type), this)
    }, b.prototype.fixTitle = function () {
        var a = this.$element;
        (a.attr("title") || "string" != typeof a.attr("data-original-title")) && a.attr("data-original-title", a.attr("title") || "").attr("title", "")
    }, b.prototype.hasContent = function () {
        return this.getTitle()
    }, b.prototype.getPosition = function () {
        var b = this.$element[0];
        return a.extend({}, "function" == typeof b.getBoundingClientRect ? b.getBoundingClientRect() : {
            width: b.offsetWidth,
            height: b.offsetHeight
        }, this.$element.offset())
    }, b.prototype.getCalculatedOffset = function (a, b, c, d) {
        return "bottom" == a ? {
            top: b.top + b.height,
            left: b.left + b.width / 2 - c / 2
        } : "top" == a ? {
            top: b.top - d,
            left: b.left + b.width / 2 - c / 2
        } : "left" == a ? {top: b.top + b.height / 2 - d / 2, left: b.left - c} : {
            top: b.top + b.height / 2 - d / 2,
            left: b.left + b.width
        }
    }, b.prototype.getTitle = function () {
        var a, b = this.$element, c = this.options;
        return a = b.attr("data-original-title") || ("function" == typeof c.title ? c.title.call(b[0]) : c.title)
    }, b.prototype.tip = function () {
        return this.$tip = this.$tip || a(this.options.template)
    }, b.prototype.arrow = function () {
        return this.$arrow = this.$arrow || this.tip().find(".tooltip-arrow")
    }, b.prototype.validate = function () {
        this.$element[0].parentNode || (this.hide(), this.$element = null, this.options = null)
    }, b.prototype.enable = function () {
        this.enabled = !0
    }, b.prototype.disable = function () {
        this.enabled = !1
    }, b.prototype.toggleEnabled = function () {
        this.enabled = !this.enabled
    }, b.prototype.toggle = function (b) {
        var c = b ? a(b.currentTarget)[this.type](this.getDelegateOptions()).data("bs." + this.type) : this;
        c.tip().hasClass("in") ? c.leave(c) : c.enter(c)
    }, b.prototype.destroy = function () {
        this.hide().$element.off("." + this.type).removeData("bs." + this.type)
    };
    var c = a.fn.tooltip;
    a.fn.tooltip = function (c) {
        return this.each(function () {
            var d = a(this), e = d.data("bs.tooltip"), f = "object" == typeof c && c;
            e || d.data("bs.tooltip", e = new b(this, f)), "string" == typeof c && e[c]()
        })
    }, a.fn.tooltip.Constructor = b, a.fn.tooltip.noConflict = function () {
        return a.fn.tooltip = c, this
    }
}(window.jQuery), +function (a) {
    "use strict";
    var b = function (a, b) {
        this.init("popover", a, b)
    };
    if (!a.fn.tooltip) throw new Error("Popover requires tooltip.js");
    b.DEFAULTS = a.extend({}, a.fn.tooltip.Constructor.DEFAULTS, {
        placement: "right",
        trigger: "click",
        content: "",
        template: '<div class="popover"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
    }), b.prototype = a.extend({}, a.fn.tooltip.Constructor.prototype), b.prototype.constructor = b, b.prototype.getDefaults = function () {
        return b.DEFAULTS
    }, b.prototype.setContent = function () {
        var a = this.tip(), b = this.getTitle(), c = this.getContent();
        a.find(".popover-title")[this.options.html ? "html" : "text"](b), a.find(".popover-content")[this.options.html ? "html" : "text"](c), a.removeClass("fade top bottom left right in"), a.find(".popover-title").html() || a.find(".popover-title").hide()
    }, b.prototype.hasContent = function () {
        return this.getTitle() || this.getContent()
    }, b.prototype.getContent = function () {
        var a = this.$element, b = this.options;
        return a.attr("data-content") || ("function" == typeof b.content ? b.content.call(a[0]) : b.content)
    }, b.prototype.arrow = function () {
        return this.$arrow = this.$arrow || this.tip().find(".arrow")
    }, b.prototype.tip = function () {
        return this.$tip || (this.$tip = a(this.options.template)), this.$tip
    };
    var c = a.fn.popover;
    a.fn.popover = function (c) {
        return this.each(function () {
            var d = a(this), e = d.data("bs.popover"), f = "object" == typeof c && c;
            e || d.data("bs.popover", e = new b(this, f)), "string" == typeof c && e[c]()
        })
    }, a.fn.popover.Constructor = b, a.fn.popover.noConflict = function () {
        return a.fn.popover = c, this
    }
}(window.jQuery), +function (a) {
    "use strict";

    function b(c, d) {
        var e, f = a.proxy(this.process, this);
        this.$element = a(c).is("body") ? a(window) : a(c), this.$body = a("body"), this.$scrollElement = this.$element.on("scroll.bs.scroll-spy.data-api", f), this.options = a.extend({}, b.DEFAULTS, d), this.selector = (this.options.target || (e = a(c).attr("href")) && e.replace(/.*(?=#[^\s]+$)/, "") || "") + " .nav li > a", this.offsets = a([]), this.targets = a([]), this.activeTarget = null, this.refresh(), this.process()
    }

    b.DEFAULTS = {offset: 10}, b.prototype.refresh = function () {
        var b = this.$element[0] == window ? "offset" : "position";
        this.offsets = a([]), this.targets = a([]);
        var c = this;
        this.$body.find(this.selector).map(function () {
            var d = a(this), e = d.data("target") || d.attr("href"), f = /^#\w/.test(e) && a(e);
            return f && f.length && [[f[b]().top + (!a.isWindow(c.$scrollElement.get(0)) && c.$scrollElement.scrollTop()), e]] || null
        }).sort(function (a, b) {
            return a[0] - b[0]
        }).each(function () {
            c.offsets.push(this[0]), c.targets.push(this[1])
        })
    }, b.prototype.process = function () {
        var a, b = this.$scrollElement.scrollTop() + this.options.offset,
            c = this.$scrollElement[0].scrollHeight || this.$body[0].scrollHeight, d = c - this.$scrollElement.height(),
            e = this.offsets, f = this.targets, g = this.activeTarget;
        if (b >= d) return g != (a = f.last()[0]) && this.activate(a);
        for (a = e.length; a--;) g != f[a] && b >= e[a] && (!e[a + 1] || b <= e[a + 1]) && this.activate(f[a])
    }, b.prototype.activate = function (b) {
        this.activeTarget = b, a(this.selector).parents(".active").removeClass("active");
        var c = this.selector + '[data-target="' + b + '"],' + this.selector + '[href="' + b + '"]',
            d = a(c).parents("li").addClass("active");
        d.parent(".dropdown-menu").length && (d = d.closest("li.dropdown").addClass("active")), d.trigger("activate")
    };
    var c = a.fn.scrollspy;
    a.fn.scrollspy = function (c) {
        return this.each(function () {
            var d = a(this), e = d.data("bs.scrollspy"), f = "object" == typeof c && c;
            e || d.data("bs.scrollspy", e = new b(this, f)), "string" == typeof c && e[c]()
        })
    }, a.fn.scrollspy.Constructor = b, a.fn.scrollspy.noConflict = function () {
        return a.fn.scrollspy = c, this
    }, a(window).on("load", function () {
        a('[data-spy="scroll"]').each(function () {
            var b = a(this);
            b.scrollspy(b.data())
        })
    })
}(window.jQuery), +function (a) {
    "use strict";
    var b = function (b) {
        this.element = a(b)
    };
    b.prototype.show = function () {
        var b = this.element, c = b.closest("ul:not(.dropdown-menu)"), d = b.attr("data-target");
        if (d || (d = b.attr("href"), d = d && d.replace(/.*(?=#[^\s]*$)/, "")), !b.parent("li").hasClass("active")) {
            var e = c.find(".active:last a")[0], f = a.Event("show.bs.tab", {relatedTarget: e});
            if (b.trigger(f), !f.isDefaultPrevented()) {
                var g = a(d);
                this.activate(b.parent("li"), c), this.activate(g, g.parent(), function () {
                    b.trigger({type: "shown.bs.tab", relatedTarget: e})
                })
            }
        }
    }, b.prototype.activate = function (b, c, d) {
        function e() {
            f.removeClass("active").find("> .dropdown-menu > .active").removeClass("active"), b.addClass("active"), g ? (b[0].offsetWidth, b.addClass("in")) : b.removeClass("fade"), b.parent(".dropdown-menu") && b.closest("li.dropdown").addClass("active"), d && d()
        }

        var f = c.find("> .active"), g = d && a.support.transition && f.hasClass("fade");
        g ? f.one(a.support.transition.end, e).emulateTransitionEnd(150) : e(), f.removeClass("in")
    };
    var c = a.fn.tab;
    a.fn.tab = function (c) {
        return this.each(function () {
            var d = a(this), e = d.data("bs.tab");
            e || d.data("bs.tab", e = new b(this)), "string" == typeof c && e[c]()
        })
    }, a.fn.tab.Constructor = b, a.fn.tab.noConflict = function () {
        return a.fn.tab = c, this
    }, a(document).on("click.bs.tab.data-api", '[data-toggle="tab"], [data-toggle="pill"]', function (b) {
        b.preventDefault(), a(this).tab("show")
    })
}(window.jQuery), +function (a) {
    "use strict";
    var b = function (c, d) {
        this.options = a.extend({}, b.DEFAULTS, d), this.$window = a(window).on("scroll.bs.affix.data-api", a.proxy(this.checkPosition, this)).on("click.bs.affix.data-api", a.proxy(this.checkPositionWithEventLoop, this)), this.$element = a(c), this.affixed = this.unpin = null, this.checkPosition()
    };
    b.RESET = "affix affix-top affix-bottom", b.DEFAULTS = {offset: 0}, b.prototype.checkPositionWithEventLoop = function () {
        setTimeout(a.proxy(this.checkPosition, this), 1)
    }, b.prototype.checkPosition = function () {
        if (this.$element.is(":visible")) {
            var c = a(document).height(), d = this.$window.scrollTop(), e = this.$element.offset(),
                f = this.options.offset, g = f.top, h = f.bottom;
            "object" != typeof f && (h = g = f), "function" == typeof g && (g = f.top()), "function" == typeof h && (h = f.bottom());
            var i = null != this.unpin && d + this.unpin <= e.top ? !1 : null != h && e.top + this.$element.height() >= c - h ? "bottom" : null != g && g >= d ? "top" : !1;
            this.affixed !== i && (this.unpin && this.$element.css("top", ""), this.affixed = i, this.unpin = "bottom" == i ? e.top - d : null, this.$element.removeClass(b.RESET).addClass("affix" + (i ? "-" + i : "")), "bottom" == i && this.$element.offset({top: document.body.offsetHeight - h - this.$element.height()}))
        }
    };
    var c = a.fn.affix;
    a.fn.affix = function (c) {
        return this.each(function () {
            var d = a(this), e = d.data("bs.affix"), f = "object" == typeof c && c;
            e || d.data("bs.affix", e = new b(this, f)), "string" == typeof c && e[c]()
        })
    }, a.fn.affix.Constructor = b, a.fn.affix.noConflict = function () {
        return a.fn.affix = c, this
    }, a(window).on("load", function () {
        a('[data-spy="affix"]').each(function () {
            var b = a(this), c = b.data();
            c.offset = c.offset || {}, c.offsetBottom && (c.offset.bottom = c.offsetBottom), c.offsetTop && (c.offset.top = c.offsetTop), b.affix(c)
        })
    })
}(window.jQuery);