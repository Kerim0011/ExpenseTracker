document.addEventListener("DOMContentLoaded", () => {
  const deleteButtons = document.querySelectorAll(".delete-btn");

  deleteButtons.forEach(btn => {
    btn.addEventListener("click", () => {
      if (confirm("Are you sure you want to delete this expense?")) {
        fetch("delete_expense.php", {
          method: "POST",
          headers: { "Content-Type": "application/x-www-form-urlencoded" },
          body: "id=" + btn.dataset.id
        })
        .then(res => res.text())
        .then(data => {
          if (data === "success") {
            btn.parentElement.parentElement.remove();
          }
        });
      }
    });
  });
});
