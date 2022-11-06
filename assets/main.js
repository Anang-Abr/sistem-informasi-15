document.addEventListener("DOMContentLoaded", function () {
    var sidebar = document.querySelector(".sidebar");
    var toggle_button = document.querySelector(".toggle-button");

    toggle_button.addEventListener("click", () => {
        toggle_button.classList.toggle("__active");
        sidebar.classList.toggle("__active");
        let title_elem = document.querySelectorAll(".title");
        for (let i = 0; i < title_elem.length; i++) {
            title_elem[i].classList.toggle("__active");
        }
    });

    var list = document.querySelectorAll(".sidebar-list");

    for (let i = 0; i < list.length; i++) {
        list[i].addEventListener("click", function () {
            let x = 0;
            while (x < list.length) {
                list[x++].className = "sidebar-list";
            }
            list[i].className = "sidebar-list __active";
        });
    }
})

const labels = ["January", "February", "March", "April", "May", "June"];

const data = {
	labels: labels,
	datasets: [
		{
			label: "Food",
			backgroundColor: "rgb(255, 99, 132)",
			borderColor: "rgb(255, 99, 132)",
			data: [0, 10, 5, 2, 20, 30, 45],
		},
		{
			label: "Others",
			backgroundColor: "#8BBCCC",
			borderColor: "#8BBCCC",
			data: [10, 5, 10, 10, 40, 15],
		},
	],
};
const data2 = {
	labels: ["food", "household", "wardrobe", "other"],
	datasets: [
		{
			label: "Food",
			backgroundColor: ["#7DE5ED", "#4C6793", "#5C2E7E", "#000000"],
			borderColor: ["#7DE5ED", "#4C6793", "#5C2E7E", "#000000"],
			data: [120, 30, 45, 90],
		},
	],
};

const config = {
	type: "bar",
	data: data,
	options: {
		responsive: true,
		maintainAspectRatio: false,
	},
};
const config2 = {
	type: "pie",
	data: data2,
	options: {
		responsive: true,
		maintainAspectRatio: false,
		plugins: {
			legend: {
				position: "right",
				align: "center",
			},
		},
		radius: 100,
	},
};
const myChart = new Chart(document.getElementById("myChart"), config);
const myChart2 = new Chart(document.getElementById("myChart2"), config2);

