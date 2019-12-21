function validateZip(zipcode) {
    const regex = /[^0-9]/g;
    zipcode.value = zipcode.value.replace(regex, "");
}
