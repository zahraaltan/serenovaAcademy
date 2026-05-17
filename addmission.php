<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css" integrity="sha512-kJlvECunwXftkPwyvHbclArO8wszgBGisiLeuDFwNM8ws+wKIw0sv1os3ClWZOcrEB2eRXULYUsm8OVRGJKwGA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js" crossorigin="anonymous"></script>
    <title>Serenova School – Admission</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-transform: capitalize;

        }
        body{
        background-color: #a0763f;

        }
        .container {
            min-height: 100vh;
            width: 100%;
            background-color: #e7ba7f;
            display: flex;
        }

        .left {
            height: 100vh;
            width: 60%;
            align-items: center;
            justify-content: space-around;
            display: flex;
            flex-direction: column;
            padding: 2rem;
            position: sticky;
            top: 0;
        }

        h1 {
            color: #a0763f;
            font-style: italic;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            border: 2px solid #a0763f;
            padding: 1rem;
        }

        .future {
            height: 30vh;
            width: 60%;
        }

        h2 {
            font-size: 2rem;
            font-family: cursive;
            color: white;
        }

        .span {
            font-size: 3rem;
            font-style: italic;
            color: #a0763f;
        }

        .future p {
            color: #a0763f;
            line-height: 2;
            font-family: 'Times New Roman', Times, serif;
        }

        .hero-stats {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .stat {
            margin: 1rem;
        }

        .num {
            font-size: 3rem;
            color: #a0763f;
        }

        .lbl {
            font-size: 1rem;
            font-family: cursive;
            color: #fff;
        }

        .right {
            width: 40%;
            background-color: #f5ebe0;
            padding: 2rem;
            overflow-y: auto;
        }

        .steps {
            margin-bottom: 40px;
        }

        .section-tag {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #a0763f;
            margin-bottom: 8px;
        }

        .section-title {
            font-size: 20px;
            font-weight: 700;
            color: #3b2a1a;
            margin-bottom: 16px;
        }

        .step {
            display: flex;
            gap: 16px;
            align-items: flex-start;
            padding: 16px 0;
            border-bottom: 1px solid #d6c4a8;
        }

        .step:last-child {
            border-bottom: none;
        }

        .step-num {
            flex-shrink: 0;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #3b2a1a;
            color: #e7ba7f;
            font-size: 15px;
            font-weight: 700;
            display: grid;
            place-items: center;
            margin-top: 2px;
        }

        .step-content h3 {
            font-size: 15px;
            font-weight: 600;
            color: #3b2a1a;
            margin-bottom: 4px;
            text-transform: capitalize;
        }

        .step-content p {
            font-size: 13px;
            color: #6b5744;
            line-height: 1.6;
        }

        .form-card {
            background: #fff;
            border: 1.5px solid #d6c4a8;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 48px rgba(60, 30, 10, 0.1);
        }

        .form-header {
            background: #3b2a1a;
            padding: 24px 28px;
            border-bottom: 3px solid #a0763f;
        }

        .form-header h2 {
            font-size: 20px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 4px;
            font-family: Georgia, serif;
            text-transform: capitalize;
        }

        .form-header p {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.55);
            text-transform: none;
        }

        .form-body {
            padding: 24px;
        }

        .form-row {
            margin-bottom: 16px;
        }

        .form-row label {
            display: block;
            font-size: 11px;
            font-weight: 600;
            color: #3b2a1a;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            margin-bottom: 6px;
        }

        .form-row input,
        .form-row select,
        .form-row textarea {
            width: 100%;
            padding: 10px 12px;
            border: 1.5px solid #d6c4a8;
            border-radius: 6px;
            font-family: Arial, sans-serif;
            font-size: 13px;
            color: #3b2a1a;
            background: #faf6f0;
            transition: border-color 0.2s, background 0.2s;
            outline: none;
            appearance: none;
        }

        .form-row input:focus,
        .form-row select:focus,
        .form-row textarea:focus {
            border-color: #a0763f;
            background: #fff;
            box-shadow: 0 0 0 3px rgba(160, 118, 63, 0.12);
        }

        .form-row textarea {
            resize: vertical;
            min-height: 72px;
        }

        .form-grid2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .btn-primary {
            width: 100%;
            padding: 13px;
            background: #a0763f;
            color: #fff;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 0.5px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.2s, transform 0.15s;
            margin-top: 8px;
            text-transform: capitalize;
        }

        .btn-primary:hover {
            background: #7a5a2e;
            transform: translateY(-1px);
        }

        .btn-primary:active {
            transform: translateY(0);
        }

        .form-note {
            margin-top: 12px;
            font-size: 11px;
            color: #8a7060;
            text-align: center;
            line-height: 1.6;
            text-transform: none;
        }
        .success-msg {
            display: none;
            text-align: center;
            padding: 32px;
        }

        .success-msg .check {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: #2d7a4f;
            color: #fff;
            font-size: 26px;
            display: grid;
            place-items: center;
            margin: 0 auto 18px;
        }

        .success-msg h3 {
            font-size: 20px;
            color: #3b2a1a;
            margin-bottom: 8px;
            font-family: Georgia, serif;
        }

        .success-msg p {
            font-size: 13px;
            color: #6b5744;
            line-height: 1.7;
        }
        @media (max-width: 768px) {
            .container { flex-direction: column; }
            .left { width: 100%; height: auto; position: static; padding: 2rem 1.5rem; }
            .right { width: 100%; padding: 1.5rem; }
            .form-grid2 { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <div class="left">
            <h1>Admission Open 2026–27</h1>

            <div class="future">
                <h2>Shape Your Child's <span class="span">Future</span> at Serenova</h2>
                <p>We nurture curious minds, confident hearts, and responsible citizens. Apply today and become part of a tradition of academic excellence.</p>
            </div>

            <div class="hero-stats">
                <div class="stat">
                    <div class="num">25+</div>
                    <div class="lbl">Years of Excellence</div>
                </div>
                <div class="stat">
                    <div class="num">98%</div>
                    <div class="lbl">Board Pass Rate</div>
                </div>
                <div class="stat">
                    <div class="num">3200+</div>
                    <div class="lbl">Alumni Worldwide</div>
                </div>
            </div>
    </div>
        <div class="right">
            <div class="steps">
                <div class="section-tag">Admission Process</div>
                <div class="section-title">Simple 4-Step Journey</div>

                <div class="step">
                    <div class="step-num">1</div>
                    <div class="step-content">
                        <h3>Submit Online Application</h3>
                        <p>Fill in the form on this page. Our team will reach out within 2 business days to confirm receipt.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-num">2</div>
                    <div class="step-content">
                        <h3>Document Submission</h3>
                        <p>Provide birth certificate, previous report cards (last 2 years), and 2 passport photos.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-num">3</div>
                    <div class="step-content">
                        <h3>Entrance Assessment</h3>
                        <p>A friendly academic assessment is conducted for Grades 2 and above to ensure proper class placement.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-num">4</div>
                    <div class="step-content">
                        <h3>Enrolment & Fee</h3>
                        <p>Receive your admission offer letter, complete the registration fee, and secure your child's seat!</p>
                    </div>
                </div>
            </div>

            <div class="form-card">
                <div class="form-header">
                    <h2>Apply for Admission</h2>
                    <p>Academic Year 2026 – 2027 · Seats are limited</p>
                </div>

                <div class="form-body" id="formBody">
                    <form id="admissionForm" onsubmit="submitForm(event)" novalidate>

                        <div class="form-row">
                            <label>Student's Full Name *</label>
                            <input type="text" placeholder="e.g. Ayesha Khan" required>
                        </div>

                        <div class="form-grid2">
                            <div class="form-row">
                                <label>Date of Birth *</label>
                                <input type="date" required>
                            </div>
                            <div class="form-row">
                                <label>Gender *</label>
                                <select required>
                                    <option value="">Select</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <label>Applying for Grade *</label>
                            <select required>
                                <option value="">Select Grade / Level</option>
                                <option>Pre-Kindergarten</option>
                                <option>Kindergarten</option>
                                <option>Grade 1</option>
                                <option>Grade 2</option>
                                <option>Grade 3</option>
                                <option>Grade 4</option>
                                <option>Grade 5</option>
                                <option>Grade 6</option>
                                <option>Grade 7</option>
                                <option>Grade 8</option>
                                <option>Grade 9 (O-Level / Matric)</option>
                                <option>Grade 10 (O-Level / Matric)</option>
                                <option>Grade 11 (A-Level / FSc)</option>
                                <option>Grade 12 (A-Level / FSc)</option>
                            </select>
                        </div>

                        <div class="form-row">
                            <label>Parent / Guardian Name *</label>
                            <input type="text" placeholder="Father or Mother's name" required>
                        </div>

                        <div class="form-grid2">
                            <div class="form-row">
                                <label>Phone Number *</label>
                                <input type="tel" placeholder="03XX-XXXXXXX" required>
                            </div>
                            <div class="form-row">
                                <label>Email Address *</label>
                                <input type="email" placeholder="email@example.com" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <label>Current / Previous School</label>
                            <input type="text" placeholder="Leave blank if first time">
                        </div>

                        <div class="form-row">
                            <label>Additional Message</label>
                            <textarea placeholder="Any special requirements or questions?"></textarea>
                        </div>

                        <button class="btn-primary" type="submit">Submit Application →</button>
                        <p class="form-note">By submitting, you agree to our privacy policy. We will never share your information.</p>
                    </form>
                </div>

                <div class="success-msg" id="successMsg">
                    <div class="check">✓</div>
                    <h3>Application Received!</h3>
                    <p>Thank you for applying to Serenova School.<br>Our admissions team will contact you within <strong>2 business days</strong> to guide you through the next steps.</p>
                </div>
            </div>

        </div>

    </div>

    <?php include 'footer.php'; ?>

    <script>
        function submitForm(e) {
            e.preventDefault();
            const form = document.getElementById('admissionForm');
            const inputs = form.querySelectorAll('[required]');
            let valid = true;
            inputs.forEach(el => {
                if (!el.value.trim()) { el.style.borderColor = '#e53e3e'; valid = false; }
                else { el.style.borderColor = ''; }
            });
            if (!valid) { inputs[0].focus(); return; }
            document.getElementById('formBody').style.display = 'none';
            document.getElementById('successMsg').style.display = 'block';
        }

        document.querySelectorAll('.step').forEach((el, i) => {
            el.style.animationDelay = i * 0.1 + 's';
        });
    </script>
</body>
</html>