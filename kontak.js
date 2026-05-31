document.addEventListener("DOMContentLoaded", function() {

    // 1. INTERAKTIF FAQ ACCORDION
    const faqQuestions = document.querySelectorAll(".faq-question");

    faqQuestions.forEach(question => {
        question.addEventListener("click", function() {
            const currentItem = this.parentElement;
            
            // Tutup item FAQ lain yang sedang terbuka (opsional, jika ingin sistem single-open)
            document.querySelectorAll(".faq-item").forEach(item => {
                if (item !== currentItem) {
                    item.classList.remove("active");
                }
            });

            // Toggle class active untuk item yang di-klik
            currentItem.classList.toggle("active");
        });
    });

    // 2. VALIDASI & SUBMIT FORMULIR KONTAK
    const contactForm = document.getElementById("contactForm");
    if(contactForm) {
        contactForm.addEventListener("submit", async function(e) {
            e.preventDefault();
            
            // Efek animasi loading sederhana pada tombol saat submit
            const submitBtn = this.querySelector(".btn-submit");
            const originalText = submitBtn.innerText;
            submitBtn.innerText = "Mengirim...";
            submitBtn.disabled = true;

            try {
                const payload = Object.fromEntries(new FormData(contactForm).entries());
                const response = await fetch("api/contact.php", {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify(payload)
                });
                const result = await response.json();
                if (!result.ok) throw new Error(result.message || "Pesan gagal dikirim.");
                alert("Terima kasih! Pesan kamu telah berhasil dikirim ke tim KaryaNusa.");
                contactForm.reset();
            } catch (error) {
                alert(error.message || "Pesan gagal dikirim. Pastikan database sudah di-import.");
            } finally {
                submitBtn.innerText = originalText;
                submitBtn.disabled = false;
            }
        });
    }

    // 3. VALIDASI NEWSLETTER
    const newsletterForm = document.getElementById("newsletterForm");
    if(newsletterForm) {
        newsletterForm.addEventListener("submit", function(e) {
            e.preventDefault();
            const emailInput = this.querySelector("input").value;
            
            alert(`Terima kasih! Email (${emailInput}) berhasil terdaftar untuk mendapatkan buletin mingguan.`);
            this.reset();
        });
    }
});
