import { index, store, destroy } from "./controller.mjs";

const main = () => {
    index()
    // Tambah dua data 
    const users = [
        { nama: "Maya", umur: 21, alamat: "Bogor", email: "maya@mail.com" },
        { nama: "Rian", umur: 22, alamat: "Depok", email: "rian@mail.com" }
    ];

    // tambah data ke array data
    store(users[0]);
    store(users[1]);



    // Hapus data index ke-2
    destroy(2);

    index();
};

// Jalankan program
main();
