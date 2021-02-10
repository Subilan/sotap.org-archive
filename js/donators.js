$.getJSON("/custom/donators.json", data => {
    let sort = new Array();
    for (let i = 0; i < Object.keys(data).length; i++) {
        sort.push([Object.keys(data)[i], data[Object.keys(data)[i]]]);
    }
    sort = sort.sort((p, q) => {
        return q[1] - p[1];
    });
    let list = new Array();

    $("#loading-spinner").remove();

    if (sort.length >= 1) {
        sort.forEach(k => {
            let i = sort.indexOf(k) + 1;
            let classname = i <= 3 ? "accent donator-number" : "donator-number";
            list.push(`<li><span class="${classname}">${i}</span>${k[0]}</li>`);
        });

        list.forEach(k => {
            $("#list").append(k);
        })
    } else {
        $("#list").before("<strong style='visibility: hidden' id='nothing'>暂无任何捐助信息 QAQ</strong>");
        $("#list").remove();
    }
});

$(document).ready(() => {
    $("#title").addClass("animated");
    $("#title").on("animationend", () => {
        $("#subtitle")
        .removeClass("hidden")
        .addClass("fadeIn")
        .addClass("faster")
        .addClass("animated");
        $("#subtitle").on("animationend", () => {
            if ($("#list").length >= 1) {
                let list = $("#list");
                list.css("visibility", "visible");
                let children = list.children();
                for (let i = 0; i < children.length; i++) {
                    let k = children[i];
                    k.style.animationDelay = (i * 0.1).toString() + "s";
                    k.classList
                    .add("fadeInUp")
                    .add("faster")
                    .add("animated");
                }
            } else {
                $("#nothing")
                .css("visibility", "visible")
                .addClass("fadeInUp")
                .addClass("faster")
                .addClass("animated");
            }
        })
    });
})