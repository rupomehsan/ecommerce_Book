function debounce(func, wait, immediate) {
    var timeout, args, context, timestamp, result;
    if (null == wait) wait = 100;

    function later() {
        var last = Date.now() - timestamp;

        if (last < wait && last >= 0) {
            timeout = setTimeout(later, wait - last);
        } else {
            timeout = null;
            if (!immediate) {
                result = func.apply(context, args);
                context = args = null;
            }
        }
    };

    var debounced = function () {
        context = this;
        args = arguments;
        timestamp = Date.now();
        var callNow = immediate && !timeout;
        if (!timeout) timeout = setTimeout(later, wait);
        if (callNow) {
            result = func.apply(context, args);
            context = args = null;
        }

        return result;
    };

    debounced.clear = function () {
        if (timeout) {
            clearTimeout(timeout);
            timeout = null;
        }
    };

    debounced.flush = function () {
        if (timeout) {
            result = func.apply(context, args);
            context = args = null;

            clearTimeout(timeout);
            timeout = null;
        }
    };

    return debounced;
};

function active_menu() {
    let url = location.href;
    let link = document.querySelector(`a[href="${url}"]`);
    if (link) {
        link.classList.add('active');
        link.parentNode.parentNode.parentNode.classList.add('active');
    }
}

function preview(target) {
    document.getElementById(target).src = URL.createObjectURL(event.target.files[0])
}

const createUrl = debounce(function (string) {
    let lowercaseString = string.toLowerCase();
    let hyphenatedString = lowercaseString.replace(/ /g, "-");
    document.getElementById('product_url').value = hyphenatedString;
    if (!location.href.includes('edit')) {
        document.getElementById('meta_title').value = hyphenatedString;
        document.getElementById('meta_keywords').value = hyphenatedString;
        document.getElementById('meta_description').value = hyphenatedString;
    }
}, 500);

function calc_discount(type = "discount_percent") {
    let product_price = document.querySelector('input[name="main_price"');
    let discount_percent = document.querySelector('input[name="discount_percent"');
    let discount_flat_amount = document.querySelector('input[name="discount_flat_amount"');
    let discount_price = document.querySelector('input[name="discount_price"');

    if (type == "discount_percent") {
        discount_flat_amount.value = Math.round(+product_price.value * +discount_percent.value / 100);
    }

    if (type == "discount_flat_amount") {
        discount_percent.value = Math.round(100 * +discount_flat_amount.value / +product_price.value);
    }

    discount_price.value = +product_price.value - discount_flat_amount.value;

}

const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 2000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.onmouseenter = Swal.stopTimer;
        toast.onmouseleave = Swal.resumeTimer;
    }
});

window.s_alert = (title = "success", icon="success") => {
    Toast.fire({
        icon,
        title
    });
}

window.addEventListener("load", () => {
    active_menu();
});
