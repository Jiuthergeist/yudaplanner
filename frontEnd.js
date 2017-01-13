
/* Invoked when the user tries to add a class. */
function addClass() {

	var chosen = document.getElementById("class-menu").value;
	var classList = document.getElementById("my-classes-list");
	var newItem = document.createElement("li");
	var newItemId = "*" + chosen;

	/* Class is only added if it's not added already! */
	if (document.getElementById(newItemId) == null) {
		newItem.appendChild(document.createTextNode(chosen));
		newItem.setAttribute("id", newItemId);
		var newClass = "list-group-item list-group-item-info";
		var items = classList.getElementsByTagName("li");
		if (items.length > 0) {
			if (items[items.length - 1].getAttribute("class") == newClass) {
				newClass = "list-group-item list-group-item-warning";
			}
		}

		var removeButton = document.createElement("button");
		var removeButtonSpan = document.createElement("span");
		removeButtonSpan.setAttribute("class", "glyphicon glyphicon-remove");
		removeButtonSpan.setAttribute("aria-hidden", true);
		removeButton.setAttribute("type", "button");
		removeButton.setAttribute("class", "btn btn-default btn-xs pull-right")
		removeButton.setAttribute("id", newItemId + "REMOVE");

		removeButton.appendChild(removeButtonSpan);
		newItem.appendChild(removeButton);

		newItem.setAttribute("class", newClass);
		classList.appendChild(newItem);
	}

}