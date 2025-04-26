
# 🧬 Bioinformatics Research Lab Website

This is a simple, responsive academic website built using **HTML**, **CSS**, and **PHP includes**. It showcases research focus areas, the research team, publications, technologies used, and student dissertation work.


---

## 🔍 Project Overview

The website is intended for an academic or research group working in the fields of:

- Systems Biology  
- Biological Network Analysis  
- Structural Bioinformatics  
- Molecular Modeling and Docking  
- Machine Learning and Artificial Intelligence in Biology  

---

## 📁 Project Structure

To be added later.

---

## 🧰 Technologies Used

- **HTML5** – Content structure  
- **CSS3** – Styling, layout, and responsiveness  
- **PHP** – Modular page construction (headers, footers)  
- **CSS Grid & Flexbox** – For responsive layout design  

---

## 📝 How to Use / Customize

1. **Edit Content**
   - Update each page’s `<main>` section with your lab’s content.
   - Modify team info, photos, and links in `research_team.php`.

2. **Update Styles**
   - Edit the `css/style.css` file to change colors, spacing, layout, etc.

3. **Add New Pages**
   - Duplicate `template.html` and update content inside.

4. **Manage Images**
   - Place team photos or graphics in the `images/` folder.
   - Use either square (1:1) or rectangular dimensions as required.

5. **Contact Form**
   - Ensure embedded Google Forms have `width="100%"` for responsiveness.

---
## ⚙️ Deployment with `deploy_html.sh`

<<<<<<< HEAD
To simplify deployments from the Git repository to the live server root (`/var/www/`), a script named `deploy_html.sh` is provided.
Make sure to use `rsync` all the live contents to the editable folder `~/compbiosysnbu-1` with the following command:


### 📂 Folder Structure

- Git-managed website code: `/home/ksk/compbiosysnbu-1/`
- Server root directory: `/var/www/html/`

### 🔁 Workflow

Each time changes are pulled from Git:

1. The current contents of `/var/www/html/` are **backed up** with a timestamp.
2. The updated files from `/home/ksk/compbiosysnbu-1/` are **copied** to `/var/www/html/`.
<<<<<<< HEAD
```bash
rsync -avh /var/www/html/ /home/ksk/compbiosysnbu-1/
```
If this step is ignored, there might be some inconsistency, and some edits from other sources may not be reflected in the live website. 
=======
>>>>>>> 39f83d5 (direct bind version  trying to push it directly to)

### ▶️ Script Behavior

```bash
#!/bin/bash

TIMESTAMP=$(date +"%Y%m%d_%H%M%S")
BACKUP_DIR="/var/www/backup_html_$TIMESTAMP"

echo "🚀 Starting deployment..."
echo "📦 Backing up current /var/www/html to $BACKUP_DIR"
sudo mkdir -p "$BACKUP_DIR"
sudo cp -r /var/www/html/* "$BACKUP_DIR/"

echo "➡️  Copying new files from /home/ksk/compbiosysnbu-1 ..."
sudo cp -rf /home/ksk/compbiosysnbu-1/* /var/www/html/

echo "✅ Deployment completed successfully."
echo "🗃️  Backup is stored at: $BACKUP_DIR"
---
## 🚀 Features

- Modular structure using PHP includes
- Mobile-friendly & responsive design
- Lightweight, fast-loading pages
- Easily expandable: can integrate tools, galleries, charts, blogs, or database connections

---

## ✅ To-Do / Future Ideas

- [ ] Add publication section with PDF downloads  

---

© 2025 [compbiosysnbu.in](http://compbiosysnbu.in) – All rights reserved.
