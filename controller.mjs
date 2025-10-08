import users from "./data.mjs";

// 1) tampilkan data (pakai .map sesuai instruksi tugas)
export const index = () => {
    console.log("=================== Daftar =====================");
    users.map((u, i) => {
        console.log(`${i + 1}. Nama: ${u.nama}, Umur: ${u.umur}, Alamat: ${u.alamat}, Email: ${u.email}`);
    });
};

// 2) tambahkan data
//    - jika argumen "user" ada: push satu
//    - jika tidak ada argumen: contoh push minimal 2 (sesuai tugas)
export const store = (user) => {
    if (user) {
        users.push(user);
        console.log(`\nData "${user.nama}" ditambahkan\n`);
    } else {
        users.push(
            { nama: "Maya", umur: 21, alamat: "Bogor", email: "maya@mail.com" },
            { nama: "Rian", umur: 22, alamat: "Depok", email: "rian@mail.com" }
        );
        console.log("\n2 data ditambahkan\n");
    }
    index();
};

// 3) hapus data berdasarkan index (0-based)
export const destroy = (idx) => {
    const i = Number(idx);
    if (Number.isInteger(i) && i >= 0 && i < users.length) {
        const [gone] = users.splice(i, 1);
        console.log(`\nData "${gone.nama}" dihapus\n`);
    } else {
        console.log(`\nIndeks ${idx} tidak valid (0..${users.length - 1})\n`);
    }
    index();
};
