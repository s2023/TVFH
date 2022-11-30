$(document).ready(() => {
    // cambiar paises
    $('#paisFacturacionId').on('change', () => {
        getDepRegProv($('#paisFacturacionId').val(), (data) => {
            let html = '<option title="Departamento/Provincia/Región de Facturación" value>';
            html += '  -- Departamento/Provincia/Región de Facturación --';
            html += '</option>';

            data.forEach(d => {
                html += '<option title="' + d.nombreDepProvReg +'" value="' + d.idDepProvReg + '">';
                html += '  ' + d.nombreDepProvReg;
                html += '</option>';
            });

            $('#depRegProvFacturacionId').html('');
            $('#ciudadFacturacionId').html('<option title="Ciudad de Facturación" value>-- Ciudad de Facturación --</option>');
            $('#depRegProvFacturacionId').html(html);
        })
    });

    $('#paisEnvioId').on('change', () => {
        getDepRegProv($('#paisEnvioId').val(), (data) => {
            let html = '<option title="Departamento/Provincia/Región de Envío" value>';
            html += '  -- Departamento/Provincia/Región de Envío --';
            html += '</option>';

            data.forEach(d => {
                html += '<option title="' + d.nombreDepProvReg +'" value="' + d.idDepProvReg + '">';
                html += '  ' + d.nombreDepProvReg;
                html += '</option>';
            });

            $('#depRegProvEnvioId').html('');
            $('#ciudadEnvioId').html('<option title="Ciudad de Envío" value>-- Ciudad de Envío --</option>');
            $('#depRegProvEnvioId').html(html);
        })
    });

    // cambiar ciudades
    $('#depRegProvFacturacionId').on('change', () => {
        getCiudades($('#depRegProvFacturacionId').val(), (data) => {
            let html = '<option title="Ciudad de Facturación" value>';
            html += '  -- Ciudad de Facturación --';
            html += '</option>';

            data.forEach(d => {
                html += '<option title="' + d.nombreCiudad +'" value="' + d.idCiudad + '">';
                html += '  ' + d.nombreCiudad;
                html += '</option>';
            });

            $('#ciudadFacturacionId').html('<option title="Ciudad de Facturación" value>-- Ciudad de Facturación --</option>');
            $('#ciudadFacturacionId').html(html);
        });
    });

    $('#depRegProvEnvioId').on('change', () => {
        getCiudades($('#depRegProvEnvioId').val(), (data) => {
            let html = '<option title="Ciudad de Envío" value>';
            html += '  -- Ciudad de Envío --';
            html += '</option>';

            data.forEach(d => {
                html += '<option title="' + d.nombreCiudad +'" value="' + d.idCiudad + '">';
                html += '  ' + d.nombreCiudad;
                html += '</option>';
            });

            $('#ciudadEnvioId').html('<option title="Ciudad de Envío" value>-- Ciudad de Envío --</option>');
            $('#ciudadEnvioId').html(html);
        });
    });
});