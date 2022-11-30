function getDepRegProv(id, callback) {
    $.get('/tvfh/api/DepRegProv/get.php?id=' + id, (data) => {
        data = JSON.parse(data);
        callback(data);
    });
}

function getCiudades(id, callback) {
    $.get('/tvfh/api/Ciudad/get.php?id=' + id, (data) => {
        data = JSON.parse(data);
        callback(data);
    });
}