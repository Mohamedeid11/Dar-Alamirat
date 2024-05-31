"use strict";let addressList=[];function showNewAddressForm(){document.getElementById("newAddressForm").style.display="block",document.getElementById("editAddressForm").style.display="none"}function cancelNewAddress(){clearNewAddressForm(),document.getElementById("newAddressForm").style.display="none"}function clearNewAddressForm(){document.getElementById("newCountry").value="",document.getElementById("newCity").value="",document.getElementById("newStreet").value="",document.getElementById("newPostalCode").value="",document.getElementById("newNeighborhood").value="",document.getElementById("newHouseNumber").value=""}function saveNewAddress(){const e=document.getElementById("newCountry").value,t=document.getElementById("newCity").value,d=document.getElementById("newStreet").value,n=document.getElementById("newPostalCode").value,o=document.getElementById("newNeighborhood").value,l=document.getElementById("newHouseNumber").value;if(e&&t&&d&&n&&o&&l){const s=addressList.length+1;addressList.push({id:s,country:e,city:t,street:d,postalCode:n,neighborhood:o,houseNumber:l}),renderAddressList(),clearNewAddressForm(),document.getElementById("newAddressForm").style.display="none"}else alert("Please fill all fields.")}function editAddress(e){const t=addressList.find((t=>t.id===e));t&&(document.getElementById("editAddressForm").innerHTML=`\n                <input type="hidden" id="editId" value="${t.id}">\n                <a class="btn-close-address" onclick="cancelEditAddress()"><i class="fa-solid fa-xmark"></i></a>\n                <div class="grid-list">\n                    <div class="grid-item">\n                        <label for="editCountry" class="form-label">Country</label>\n                        <input type="text" class="form-control" id="editCountry" value="${t.country}">\n                    </div>\n                    <div class="grid-item">\n                        <label for="editCity" class="form-label">City</label>\n                        <input type="text" class="form-control" id="editCity" value="${t.city}">\n                    </div>\n                    <div class="grid-item">\n                        <label for="editStreet" class="form-label">Street</label>\n                        <input type="text" class="form-control" id="editStreet" value="${t.street}">\n                    </div>\n                    <div class="grid-item">\n                        <label for="editPostalCode" class="form-label">Postal Code</label>\n                        <input type="text" class="form-control" id="editPostalCode" value="${t.postalCode}">\n                    </div>\n                    <div class="grid-item">\n                        <label for="editNeighborhood" class="form-label">Neighborhood</label>\n                        <input type="text" class="form-control" id="editNeighborhood" value="${t.neighborhood}">\n                    </div>\n                    <div class="grid-item">\n                        <label for="editHouseNumber" class="form-label">House Number</label>\n                        <input type="text" class="form-control" id="editHouseNumber" value="${t.houseNumber}">\n                    </div>\n                </div>\n                <button class="btn-save" onclick="saveEditedAddress()">Save</button>\n                \n            `,document.getElementById("editAddressForm").style.display="block",document.getElementById("newAddressForm").style.display="none")}function cancelEditAddress(){document.getElementById("editAddressForm").style.display="none",document.getElementById("editAddressForm").innerHTML=""}function saveEditedAddress(){var e=document.getElementById("editId").value,t=document.getElementById("editCountry").value,d=document.getElementById("editCity").value,n=document.getElementById("editStreet").value,o=document.getElementById("editPostalCode").value,l=document.getElementById("editNeighborhood").value,s=document.getElementById("editHouseNumber").value;if(t&&d&&n&&o&&l&&s){const i=addressList.find((t=>t.id==e));i&&(i.country=t,i.city=d,i.street=n,i.postalCode=o,i.neighborhood=l,i.houseNumber=s,renderAddressList(),cancelEditAddress())}else alert("Please fill all fields.")}function deleteAddress(e){addressList=addressList.filter((t=>t.id!==e)),document.getElementById("editAddressForm").style.display="none",renderAddressList()}function confirmAddress(){const e=document.querySelector('input[name="address"]:checked');if(e){const t=addressList.find((t=>t.id==e.value));document.getElementById("selectedAddressInfo").textContent=`${t.country}, ${t.city}, ${t.street}, ${t.postalCode}`;const d=new bootstrap.Collapse(document.getElementById("collapseOne"),{toggle:!1}),n=new bootstrap.Collapse(document.getElementById("collapseTwo"),{toggle:!1});d.hide(),n.show(),document.querySelector("#headingOne .edit-button").style.display="block"}else alert("Please select an address.")}function confirmShipping(){const e=document.querySelector('input[name="shipping"]:checked');if(e){const t=e.nextElementSibling.textContent.trim();document.getElementById("selectedShippingInfo").textContent=t;const d=new bootstrap.Collapse(document.getElementById("collapseTwo"),{toggle:!1}),n=new bootstrap.Collapse(document.getElementById("collapseThree"),{toggle:!1});d.hide(),n.show(),document.querySelector("#headingTwo .edit-button").style.display="block"}else alert("Please select a shipping method.")}function editStage(e){if(1===e){const e=new bootstrap.Collapse(document.getElementById("collapseOne"),{toggle:!1}),t=new bootstrap.Collapse(document.getElementById("collapseTwo"),{toggle:!1}),d=new bootstrap.Collapse(document.getElementById("collapseThree"),{toggle:!1});e.show(),t.hide(),d.hide()}else if(2===e){const e=new bootstrap.Collapse(document.getElementById("collapseOne"),{toggle:!1}),t=new bootstrap.Collapse(document.getElementById("collapseTwo"),{toggle:!1}),d=new bootstrap.Collapse(document.getElementById("collapseThree"),{toggle:!1});e.hide(),t.show(),d.hide()}else if(3===e){const e=new bootstrap.Collapse(document.getElementById("collapseOne"),{toggle:!1}),t=new bootstrap.Collapse(document.getElementById("collapseTwo"),{toggle:!1}),d=new bootstrap.Collapse(document.getElementById("collapseThree"),{toggle:!1});e.hide(),t.hide(),d.show()}}function showPaymentForm(e){document.getElementById("visaForm").style.display="none",document.getElementById("mastercardForm").style.display="none",document.getElementById("selectedPaymentInfo").textContent="","visa"===e?(document.getElementById("visaForm").style.display="block",document.getElementById("selectedPaymentInfo").textContent="Visa"):"mastercard"===e?(document.getElementById("mastercardForm").style.display="block",document.getElementById("selectedPaymentInfo").textContent="MasterCard"):"cod"===e&&(document.getElementById("selectedPaymentInfo").textContent="Cash on Delivery")}function completeOrder(){alert("Order Completed!")}function renderAddressList(){const e=document.getElementById("addressList");e.innerHTML="",addressList.forEach((t=>{const d=document.createElement("div");d.className="form-check mb-3 address-wrap",d.innerHTML=`\n                <label class="form-check-label" for="address${t.id}">\n                    <input class="form-check-input" type="radio" name="address" id="address${t.id}" value="${t.id}">\n                    ${t.country}, ${t.city}, ${t.street}, ${t.postalCode}\n                </label>\n                <div class="btns">\n                    <button class="btn-link" onclick="editAddress(${t.id})">Edit</button>\n                    <button class="btn-link" onclick="deleteAddress(${t.id})">Delete</button>\n                </div>\n            `,e.appendChild(d)}))}renderAddressList();