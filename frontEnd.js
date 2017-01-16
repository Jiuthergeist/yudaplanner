
/* Invoked when the user tries to add a class. */
function addClass() {

	var chosen = document.getElementById("class-menu").value;
	var classList = document.getElementById("my-classes-list");
	var newItem = document.createElement("li");
	var newItemId = "*" + chosen;

	/* Class is only added if it's not added already! */
	if (document.getElementById(newItemId) == null && chosen != "") {

		var checkBox = document.createElement("input");
		checkBox.setAttribute("type", "checkbox");
		checkBox.setAttribute("id", newItemId + "CHECKBOX");
		checkBox.setAttribute("checked", "true");
		newItem.appendChild(checkBox);

		newItem.appendChild(document.createTextNode(" " + chosen));
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
		removeButton.addEventListener("click", removeClass);

		removeButton.appendChild(removeButtonSpan);
		newItem.appendChild(removeButton);

		newItem.setAttribute("class", newClass);
		classList.appendChild(newItem);
	}

}

/* Invoked when the user tries to delete a class. */
function removeClass() {
	var classList = document.getElementById("my-classes-list");
	var endIndex = this.id.indexOf("REMOVE");
	var chosenId = this.id.substring(0, endIndex);
	var chosenElement = document.getElementById(chosenId);
	classList.removeChild(chosenElement);
	colorClassList();
}

/* Re-colors the class list. */
function colorClassList() {
	var classList = document.getElementById("my-classes-list");
	var items = classList.getElementsByTagName("li");
	for (var i = 0; i < items.length; i++) {
		if (i % 2 == 0) {
			items[i].setAttribute("class", "list-group-item list-group-item-info");
		} else {
			items[i].setAttribute("class", "list-group-item list-group-item-warning");
		}
	}
}

/* Invoked when the user toggles whether the selected class is included 
in the general stat calculation. */

function toggleCheck() {/*
	var classList = document.getElementById("my-classes-list");
	var checkIndex = this.id.indexOf("UNCHECK");
	var checkButton;
	var checkButtonSpan;

	var newItem = document.createElement("li");
	var newItemId = "*" + chosen;

	if (checkIndex == -1) { //box is checked
		checkButton = document.createElement("button");
		checkButtonSpan = document.createElement("span");
		checkButtonSpan.setAttribute("class", "glyphicon glyphicon-unchecked");
		checkButtonSpan.setAttribute("aria-hidden", true);
		checkButton.setAttribute("type", "button");
		checkButton.setAttribute("class", "btn btn-default btn-xs pull-right")
		checkButton.setAttribute("id", newItemId + "UNCHECK");
		checkButton.addEventListener("click", toggleCheck);
	}
	else {
		checkButton = document.createElement("button");
		checkButtonSpan = document.createElement("span");
		checkButtonSpan.setAttribute("class", "glyphicon glyphicon-check");
		checkButtonSpan.setAttribute("aria-hidden", true);
		checkButton.setAttribute("type", "button");
		checkButton.setAttribute("class", "btn btn-default btn-xs pull-right")
		checkButton.setAttribute("id", newItemId + "CHECK");
		checkButton.addEventListener("click", toggleCheck);
	}

	checkButton.appendChild(checkButtonSpan);
*/
}
