jQuery(document).ready(function () {

    var filter1 = 'all-dev';
    var filter2 = 'all-cert';
    var filter3 = 'all-comp';

    jQuery('#services').val('All services');
    jQuery('#certificates').val('All levels');
    jQuery('#country').val('All');
    jQuery('input[type="checkbox"]').each(function () {
        jQuery(this).prop('checked', false);
    });
    jQuery('#filtersearch').val('');

    jQuery('.tab-link').click(function () {
        var Panel = jQuery(this).attr('id');
        jQuery('.tab-link').removeClass('active');
        jQuery(this).addClass('active');
        jQuery('.custom-tab-panel').removeClass('active');
        jQuery('[data-panel="' + Panel + '"]').addClass('active');
        resetFilter();
        jQuery('#filtersearch').val('');
        jQuery('.partner-col').show();
        if (jQuery('#technology-tab').hasClass('active')) {
            jQuery('.filters-holder').slideUp();
        } else {
            jQuery('.filters-holder').slideDown();
        }
    });

    jQuery('.selection').click(function () {
        jQuery(this).toggleClass('active');
        jQuery('.selection').not(this).removeClass('active');
        var select = jQuery(this).next('.select-list');
        jQuery('.select-list').not(select).slideUp();
        select.slideToggle();
    });

    jQuery('input[name="servi"]').change(function () {
        var textArray = '';
        var valArray = [];
        var count = jQuery('input[name="servi"]:checked').length;
        var i = 1;
        jQuery('input[name="servi"]:checked').each(function () {
            var labeltext = jQuery(this).next('label').text();
            var valuefilter = jQuery(this).val();
            valArray.push(valuefilter);
            if (count == i) {
                textArray += labeltext;
            } else {
                textArray += labeltext + ', ';
            }
            i++;
        });
        jQuery('#services').val(textArray);
        jQuery('#services').data('value', valArray);
        iniFilter();
    });


    jQuery('.cert-list li').click(function () {
        var filter2 = jQuery(this).data('certificate');
        jQuery(this).parent('.select-list').slideUp();
        jQuery(this).closest('.input-outer').find('.selection').removeClass('active');
        var value1 = jQuery(this).text();
        jQuery('#certificates').val(value1);
        jQuery('#certificates').data('value', filter2);
        iniFilter();
    });

    jQuery('input[name="country"]').change(function () {
        var textArray = '';
        var valArray = '';
        var count = jQuery('input[name="country"]:checked').length;
        var i = 1;
        jQuery('input[name="country"]:checked').each(function () {
            var labeltext = jQuery(this).next('label').text();
            var valuefilter = jQuery(this).val();
            valArray += valuefilter + ' ';
            if (count == i) {
                textArray += labeltext;
            } else {
                textArray += labeltext + ', ';
            }
            i++;
        });
        jQuery('#country').val(textArray);
        jQuery('#country').data('value', valArray);
        iniFilter();
    });

    jQuery.extend(jQuery.expr[":"], {
        "containsIN": function (elem, i, match, array) {
            return (elem.textContent || elem.innerText || "").toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
        }
    });

    jQuery('#filtersearch').keyup(function () {
        resetFilter();
        jQuery('.partner-col').hide();
        var value = jQuery(this).val();
        jQuery('.partner-col:containsIN("' + value + '")').show();
    });

});

function iniFilter() {
    var filter1 = jQuery('#services').data('value');
    var filter2 = jQuery('#certificates').data('value');
    var filter3 = jQuery('#country').data('value');
    console.log(filter1);
    if (jQuery.inArray("all-dev", filter1) !== -1 || filter1.length === 0) {
        var allDev = 1;
    }
    if (filter2 == 'all-cert') {
        filter2 = '';
    }
    if (filter3.includes('all-comp') || filter3 == '') {
        filter3 = 'x';
    }
    jQuery('.partner-col').each(function () {
        var values = jQuery(this).data('type');
        if (filter3 == 'x') {
            var country = 'x';
        } else {
            var country = jQuery(this).data('country');
        }
        if (allDev == 1) {
            if (values.includes(filter2) && filter3.includes(country)) {
                jQuery(this).show();
            } else {
                jQuery(this).hide();
            }
        } else {
            if (filter1.every(item => values.includes(item)) && values.includes(filter2) && filter3.includes(country)) {
                jQuery(this).show();
            } else {
                jQuery(this).hide();
            }
        }
    });
}
function resetFilter() {
    jQuery('#services').val('All services');
    jQuery('#services').data('value', 'all-dev');
    jQuery('#certificates').val('All levels');
    jQuery('#certificates').data('value', 'all-cert');
    jQuery('#country').val('All');
    jQuery('#country').data('value', 'all-comp');
    jQuery('input[type="checkbox"]').each(function () {
        jQuery(this).prop('checked', false);
    });
}