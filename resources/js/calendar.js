import { Calendar } from "@fullcalendar/core";
import dayGridPlugin from "@fullcalendar/daygrid";
import timeGridPlugin from "@fullcalendar/timegrid";
import listPlugin from "@fullcalendar/list";

const getInitialView = () => {
    if (window.innerWidth < 500) return "timeGridDay";
    else return "dayGridMonth";
};
const getToolbarRight = () => {
    if (window.innerWidth > 500) return "dayGridMonth,timeGridWeek,listMonth";
    else return "timeGridDay,dayGridWeek,listMonth";
};

let calendar = new Calendar(document.querySelector("#calendar"), {
    plugins: [dayGridPlugin, timeGridPlugin, listPlugin],
    initialView: getInitialView(),
    height: "100%",
    events: "/calendar-events", m
    defaultTimedEventDuration: "00:01",
    eventClick: (info) => {
        event.preventDefault();
        window.dispatchEvent(
            new CustomEvent("calendar-event", { bubbles: true, detail: info })
        );
    },
    headerToolbar: {
        left: "prev,next today",
        center: "title",
        right: getToolbarRight(),
    },
    windowResize: (arg) => {
        if (window.innerWidth < 500) {
            calendar.changeView("timeGridDay");
        } else {
            calendar.changeView("dayGridMonth");
        }
    },
});
window.addEventListener("refresh-calendar", () => {
    calendar.refetchEvents();
    calendar.render();
});
calendar.render();

window.calendar = calendar;
