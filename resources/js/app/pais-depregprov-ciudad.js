function getDepRegProv(id, callback) {
    $.get('/tvfh/api/DepProvReg/get.php?id=' + id, (json) => {
        const data = JSON.parse(json);
        callback(data);
    });
}

function getCiudades(id, callback) {
    $.get('/tvfh/api/Ciudad/get.php?id=' + id, (json) => {
        const data = JSON.parse(json);
        callback(data);
    });
}