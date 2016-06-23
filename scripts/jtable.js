function jTable(output_div, data, group_fields, summary, header_names) {
    // data being a json object, group_fields an array and summary a boolean
    var output = $('<table class="table table-hover" />');
    var header = $('<tr />');
    var body = $('<tbody />');
    
    // check if summary is defined. If not assign it as true.
    if (typeof summary == 'undefined') {
        summary = true;
    }
    if (typeof group_fields == 'undefined') {
        group_fields = [];
    }
    // generate header and a list of fields
    if (typeof header_names == 'undefined') {
        for (var key in data[0]) {        
            header.append($('<th>' + key + '</th>'));
        }
    } else {
        for (var i = 0; i < header_names.length; i++) {
            header.append($('<th>' + header_names[i] + '</th>'));
        }
    }
    var fields = [];
    for (var key in data[0]) {        
        fields.push(key);
    }
    
    header = $('<thead />').append(header);
    output = output.append(header);
    
    // convert object to an array
    var dataArray = [];
    for (var i = 0; i < data.length; i++) {
        var row = [];
        var obj = data[i];
        for (var key in obj) {
            var attrValue = obj[key];
            row.push(attrValue);               
        }
        dataArray.push(row);
    }
    
    // generate the body of the table
    var marker = 0;
    for (var i = 0; i < dataArray.length; i++) {        
        var x = $('<tr />')
        for (var j = 0; j < dataArray[i].length; j++) {
            // check if the field is to be grouped.
            if (jQuery.inArray(fields[j], group_fields) != -1 && i > 0) {
                // if the field is grouped check if the previous value was the same. If so leave the field blank.
                if (dataArray[i-1][j] == dataArray[i][j]) {
                    x.append($('<td></td>'));
                } else {                    
                    x.append($('<td>' + dataArray[i][j] + '</td>'));                                        
                }                
            } else {
                x.append($('<td>' + dataArray[i][j] + '</td>')); 
            }                      
        }
        if (summary == true) {
            switch (dataArray[i][0]){
                case "Sub Total":                
                    x.children().wrapInner("<strong></strong>");
                    break;
                case "Total":
                    x.addClass('table-info');
                    x.children().wrapInner("<strong></strong>");
                    break;
            }             
        }
        body.append(x);
    }   
    
    output.append(body);
    $(output_div).html(output);
}

function jTable_basic(output_div, data, headerItems) {
    // data being a json object
    var output = $('<table class="table table-hover" />');
    var header = $('<tr />');
    var body = $('<tbody />');
    
    // check if summary is defined. If not assign it as true.
    if (typeof headerItems == 'undefined') {
        // generate header and a list of fields
        var fields = [];
        for (var key in data[0]) {        
            fields.push(key);
            header.append($('<th>' + key + '</th>'));
        }
        header = $('<thead />').append(header);
        output = output.append(header);
    } else {
        for (var i = 0; i < headerItems.length; i++) {
            header.append($('<th>' + headerItems[i] + '</th>'));            
        }
        header = $('<thead />').append(header);
        output = output.append(header);
    }
    
    // convert object to an array
    var dataArray = [];
    for (var i = 0; i < data.length; i++) {
        var row = [];
        var obj = data[i];
        for (var key in obj) {
            var attrValue = obj[key];
            row.push(attrValue);               
        }
        dataArray.push(row);
    }
    
    // generate the body of the table
    var marker = 0;
    for (var i = 0; i < dataArray.length; i++) {        
        var x = $('<tr />')
        for (var j = 0; j < dataArray[i].length; j++) {            
            x.append($('<td>' + dataArray[i][j] + '</td>')); 
        }
        body.append(x);                 
    }        
    
    output.append(body);
    $(output_div).html(output);
}