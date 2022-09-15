import './bootstrap';
import jsPDF from "jspdf";
// const doc = new jsPDF();
$('#downloadtiket').click(function () {
    window.print();
    // doc.text("Hello world!", 10, 10);
    // doc.save("a4.pdf");
});
