# UAS Pemprograman

## Jawaban

### 1. Tidak sesuai

Query

```sql
SELECT a.*, b.jlm_sks FROM mahasiswa a JOIN b sks ON a.id_sks=b.id_mhs
```

tidak sesuai dengan hasil

### 2. Tidak sesuai

Query

```sql
SELECT a.*, b.matkul, c.jlm_sks FROM mahasiswa a JOIN
```

tidak sesuai dengan hasil, terdapat kesalahan dan tidak lengkap

### 3. [FlowChart](https://whimsical.com/uas-pemprograman-LCSMMEMyYZ25kWWMqnaAUo)

### 5. Menggunakan where

```sql
SELECT nama, alamat, jk, status FROM mahasiswa WHERE status='DROP Out'
```
