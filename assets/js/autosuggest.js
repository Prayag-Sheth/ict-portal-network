
$(document).ready(function () {
    $("#search").on("input", function () {
        var keyword = $(this).val();

        if (keyword.length >= 2) {
            $.ajax({
                url: "./../../admin/views/suggest.php",
                method: "GET",
                data: { search: keyword },
                success: function (data) {
                    $("#suggestions").html(data);
                }
            });
        } else {
            $("#suggestions").html(""); // Clear suggestions if there are fewer than 2 characters
        }
    });
});

 // Function to handle the "Enter" key press
 function handleEnterKey(event) {
    if (event.key === "Enter") {
        // Prevent the default form submission (if applicable)
        event.preventDefault();

        // Trigger the search function
        searchStudents();
    }
}

function searchStudents() {
    // Get the search input value
    var searchText = document.getElementById("search").value.toLowerCase();

    // Get all the rows in the table
    var rows = document.querySelectorAll("table tbody tr");

    // Loop through the rows and hide those that don't match the search input
    for (var i = 0; i < rows.length; i++) {
        var name = rows[i].getElementsByTagName("td")[0].textContent.toLowerCase();

        if (name.includes(searchText)) {
            rows[i].style.display = "";
        } else {
            rows[i].style.display = "none";
        }
    }
}



   