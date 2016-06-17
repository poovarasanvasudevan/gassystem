INSERT INTO checklist
                            VALUES (NULL, 'BBox', 1, 'Archive Code' , NULL, 'text', '', '', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_general', 'General', 'BBox','255', CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 2, 'Identification' , NULL, 'text', '', '', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_general', 'General', 'BBox','256', CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 3, 'Title' , NULL, 'text', '', '', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_general', 'General', 'BBox','257', CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 4, 'Author' , NULL, 'text', '', '', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_general', 'General', 'BBox','258', CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 5, 'Number of parts' , NULL, 'text', '', '', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_general', 'General', 'BBox','259', CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 6, 'Date of edition' , NULL, 'date', '', '', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_general', 'General', 'BBox','260', CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 7, 'Description' , NULL, 'textarea', '', '', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_general', 'General', 'BBox','261', CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxgeneral_49841', 'Leather', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxgeneral_49841', 'Synthetic', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxgeneral_49841', 'Paper', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxgeneral_49841', 'Vellum', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxgeneral_49841', 'Wood', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxgeneral_49841', 'Cloth', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxgeneral_49841', 'Other', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 8, 'Covering Materiel  description (nature)' , NULL, 'dropdown', 'y', 'bboxgeneral_49841', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_general', 'General', 'BBox','262', CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxgeneral_46264', 'Mechanical paper', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxgeneral_46264', 'Hand maid paper', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxgeneral_46264', 'Tracing paper', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxgeneral_46264', 'Wax paper', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxgeneral_46264', 'Blotting paper', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxgeneral_46264', 'Carbon paper', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxgeneral_46264', 'Greaseproof paper', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 9, 'Paper description (nature)' , NULL, 'dropdown', 'y', 'bboxgeneral_46264', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_general', 'General', 'BBox','263', CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxgeneral_39373', 'Glue', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxgeneral_39373', 'Stitch', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxgeneral_39373', 'Stapler', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxgeneral_39373', 'Spine', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxgeneral_39373', 'Other', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 10, 'Biding description' , NULL, 'dropdown', 'y', 'bboxgeneral_39373', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_general', 'General', 'BBox','264', CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 11, 'Dimensions (cm):' , NULL, 'text', '', '', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_general', 'General', 'BBox','265', CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxgeneral_67539', 'Typewritten', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxgeneral_67539', 'Handwriting', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxgeneral_67539', 'Printing', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 12, 'Medias description (Ink, inscriptions) ' , NULL, 'dropdown', 'y', 'bboxgeneral_67539', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_general', 'General', 'BBox','266', CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 13, 'Auxiliary support description' , NULL, 'text', '', '', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_general', 'General', 'BBox','267', CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 14, 'Auxiliary support dimensions (cm)' , NULL, 'text', '', '', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_general', 'General', 'BBox','268', CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxgeneral_79140', 'Staples', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxgeneral_79140', 'Pins', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxgeneral_79140', 'Paper clips', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 15, 'Fasteners' , NULL, 'dropdown', 'y', 'bboxgeneral_79140', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_general', 'General', 'BBox','269', CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 16, 'Number of pages' , NULL, 'number', '', '', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_general', 'General', 'BBox','270', CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 17, 'Incoming condition of storage' , NULL, 'text', '', '', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_general', 'General', 'BBox','271', CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxgeneral_77753', 'yes', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxgeneral_77753', 'no', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 18, 'Photograph' , NULL, 'dropdown', 'y', 'bboxgeneral_77753', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_general', 'General', 'BBox','272', CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 19, 'Name of donator # Source' , NULL, 'text', '', '', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_general', 'General', 'BBox','273', CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 20, 'Address#e-mail' , NULL, 'textarea', '', '', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_general', 'General', 'BBox','274', CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxgeneral_94049', 'Excellent', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxgeneral_94049', 'Good', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxgeneral_94049', 'Fair', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxgeneral_94049', 'Poor need immediate treatment', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 21, 'General condition:' , NULL, 'dropdown', 'y', 'bboxgeneral_94049', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_general', 'General', 'BBox','275', CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 22, 'Condition report done by' , NULL, 'text', '', '', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_general', 'General', 'BBox','276', CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 23, 'Condition report date' , NULL, 'date', '', '', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_general', 'General', 'BBox','277', CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 24, 'Diagram' , NULL, 'textarea', '', '', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_general', 'General', 'BBox','278', CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 25, 'Comments' , NULL, 'textarea', '', '', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_general', 'General', 'BBox','279', CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxbinding_53112', 'Dust', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxbinding_53112', 'Soiled', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxbinding_53112', 'Deposit', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxbinding_53112', 'Soot', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxbinding_53112', 'Grime', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxbinding_53112', 'Accretion', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 26, 'Nature surface dirt' , NULL, 'dropdown', 'y', 'bboxbinding_53112', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_binding', 'Biding\'s and Covering\'s Condition', 'BBox','280', CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxbinding_77411', 'Tears or splits', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxbinding_77411', 'Edge damage', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxbinding_77411', 'Creases', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxbinding_77411', 'Wrinkles', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxbinding_77411', 'Folds', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 27, 'Rip (description and localization)' , NULL, 'dropdown', 'y', 'bboxbinding_77411', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_binding', 'Biding\'s and Covering\'s Condition', 'BBox','281', CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxbinding_34564', 'No', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxbinding_34564', 'Yes', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 28, 'Loss' , NULL, 'dropdown', 'y', 'bboxbinding_34564', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_binding', 'Biding\'s and Covering\'s Condition', 'BBox','282', CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxbinding_32313', 'No', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxbinding_32313', 'Yes', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 29, 'Distortion' , NULL, 'dropdown', 'y', 'bboxbinding_32313', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_binding', 'Biding\'s and Covering\'s Condition', 'BBox','283', CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxbinding_32998', 'Intense use', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxbinding_32998', 'Normal', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxbinding_32998', 'None', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 30, 'Wear' , NULL, 'dropdown', 'y', 'bboxbinding_32998', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_binding', 'Biding\'s and Covering\'s Condition', 'BBox','284', CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxbinding_60874', 'Weak sewing', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxbinding_60874', 'Metal Corrosion', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 31, 'Biding\'s condition' , NULL, 'dropdown', 'y', 'bboxbinding_60874', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_binding', 'Biding\'s and Covering\'s Condition', 'BBox','285', CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 32, 'revious cons#restoration' , NULL, 'text', '', '', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_binding', 'Biding\'s and Covering\'s Condition', 'BBox','286', CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 33, 'Other' , NULL, 'textarea', '', '', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_binding', 'Biding\'s and Covering\'s Condition', 'BBox','287', CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_49519', 'Dust', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_49519', 'Soiled', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_49519', 'Deposit', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_49519', 'Soot', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_49519', 'Grime', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_49519', 'Accretion', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 34, 'Nature surface dirt' , NULL, 'dropdown', 'y', 'bboxtextblockcondition_49519', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_textblockcondition', 'Text block\'s Condition', 'BBox','288', CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_22007', 'Tears or splits', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_22007', 'Edge damage', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_22007', 'Creases', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_22007', 'Wrinkles', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_22007', 'Folds', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 35, 'Rip (description and localization)' , NULL, 'dropdown', 'y', 'bboxtextblockcondition_22007', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_textblockcondition', 'Text block\'s Condition', 'BBox','289', CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_40803', 'No', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_40803', 'Yes', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 36, 'Loss' , NULL, 'dropdown', 'y', 'bboxtextblockcondition_40803', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_textblockcondition', 'Text block\'s Condition', 'BBox','290', CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_79574', 'Intense use', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_79574', 'Normal', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_79574', 'None', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 37, 'Wear' , NULL, 'dropdown', 'y', 'bboxtextblockcondition_79574', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_textblockcondition', 'Text block\'s Condition', 'BBox','291', CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_67775', 'Extremely fragile', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_67775', 'Fragile', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_67775', 'No', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 38, 'Brittle paper' , NULL, 'dropdown', 'y', 'bboxtextblockcondition_67775', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_textblockcondition', 'Text block\'s Condition', 'BBox','292', CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_29878', 'Staining', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_29878', 'Yellowing', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_29878', 'Foxing', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 39, 'Surface appearance' , NULL, 'dropdown', 'y', 'bboxtextblockcondition_29878', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_textblockcondition', 'Text block\'s Condition', 'BBox','293', CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_55755', 'Mold spore', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_55755', 'Algae', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 40, 'Contamination' , NULL, 'dropdown', 'y', 'bboxtextblockcondition_55755', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_textblockcondition', 'Text block\'s Condition', 'BBox','294', CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_51055', 'Silverfish', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_51055', 'Drywood termites', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_51055', 'Book lice', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_51055', 'Biscuit beetles', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 41, 'Pest Infestation' , NULL, 'dropdown', 'y', 'bboxtextblockcondition_51055', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_textblockcondition', 'Text block\'s Condition', 'BBox','295', CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_34944', 'No', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_34944', 'Yes', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 42, 'Damage by pest' , NULL, 'dropdown', 'y', 'bboxtextblockcondition_34944', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_textblockcondition', 'Text block\'s Condition', 'BBox','296', CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_80422', 'cotch tape', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_80422', 'Masking tape', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_80422', 'Water activate tape', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_80422', 'Sellotape', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 43, 'Type of adhesive tape' , NULL, 'dropdown', 'y', 'bboxtextblockcondition_80422', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_textblockcondition', 'Text block\'s Condition', 'BBox','297', CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_23496', 'Light and UV', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_23496', 'RH', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_23496', 'Pollutants', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_23496', 'Pests', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_23496', 'Mold', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_23496', 'Storage', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_23496', 'Handling', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxtextblockcondition_23496', 'Disasters', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 44, 'Cause of damages' , NULL, 'dropdown', 'y', 'bboxtextblockcondition_23496', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_textblockcondition', 'Text block\'s Condition', 'BBox','298', CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 45, 'Date' , NULL, 'date', '', '', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_textblockcondition', 'Text block\'s Condition', 'BBox','299', CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 46, 'Other' , NULL, 'textarea', '', '', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_textblockcondition', 'Text block\'s Condition', 'BBox','300', CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxmediacondition_16566', 'Yes', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxmediacondition_16566', 'No', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 47, 'Fading' , NULL, 'dropdown', 'y', 'bboxmediacondition_16566', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_mediacondition', 'Media Condition', 'BBox','301', CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 48, 'Media transfer' , NULL, 'textarea', '', '', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_mediacondition', 'Media Condition', 'BBox','302', CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 49, 'Sensibility to the water' , NULL, 'textarea', '', '', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_mediacondition', 'Media Condition', 'BBox','303', CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxmediacondition_88524', 'Yes', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxmediacondition_88524', 'No', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 50, 'Abrasion' , NULL, 'dropdown', 'y', 'bboxmediacondition_88524', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_mediacondition', 'Media Condition', 'BBox','304', CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxmediacondition_45448', 'Yes', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxmediacondition_45448', 'No', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 51, 'Alteration of the paper by the ink' , NULL, 'dropdown', 'y', 'bboxmediacondition_45448', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_mediacondition', 'Media Condition', 'BBox','305', CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxmediacondition_16495', 'Yes', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxmediacondition_16495', 'No', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 52, 'Diffusion in the support' , NULL, 'dropdown', 'y', 'bboxmediacondition_16495', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_mediacondition', 'Media Condition', 'BBox','306', CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 53, 'Previous cons,restoration' , NULL, 'textarea', '', '', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_mediacondition', 'Media Condition', 'BBox','307', CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxmediacondition_25227', 'Light and UV', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxmediacondition_25227', 'RH', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxmediacondition_25227', 'Pollutants', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxmediacondition_25227', 'Pests', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxmediacondition_25227', 'Mold', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxmediacondition_25227', 'Storage', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxmediacondition_25227', 'Handling', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxmediacondition_25227', 'Disasters', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 54, 'Cause of damages' , NULL, 'dropdown', 'y', 'bboxmediacondition_25227', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_mediacondition', 'Media Condition', 'BBox','308', CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 55, 'Date' , NULL, 'date', '', '', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_mediacondition', 'Media Condition', 'BBox','309', CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 56, 'Other' , NULL, 'textarea', '', '', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_mediacondition', 'Media Condition', 'BBox','310', CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxrecomm_35688', 'Brush', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxrecomm_35688', 'Air bulb', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO attributelist
                            VALUES (NULL, 'bboxrecomm_35688', 'Vacuum', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 57, 'Cleaning' , NULL, 'dropdown', 'y', 'bboxrecomm_35688', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_recomm', 'Recommendation: Conservation, Rehousing, Handling', 'BBox','311', CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 58, 'Biding' , NULL, 'textarea', '', '', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_recomm', 'Recommendation: Conservation, Rehousing, Handling', 'BBox','312', CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 59, 'Repairs' , NULL, 'textarea', '', '', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_recomm', 'Recommendation: Conservation, Rehousing, Handling', 'BBox','313', CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 60, 'Rehousing' , NULL, 'textarea', '', '', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_recomm', 'Recommendation: Conservation, Rehousing, Handling', 'BBox','314', CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 61, 'Shelf' , NULL, 'text', '', '', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_recomm', 'Recommendation: Conservation, Rehousing, Handling', 'BBox','315', CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 62, 'Handling' , NULL, 'text', '', '', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_recomm', 'Recommendation: Conservation, Rehousing, Handling', 'BBox','316', CURRENT_TIMESTAMP);
INSERT INTO checklist
                            VALUES (NULL, 'BBox', 63, 'Comments' , NULL, 'textarea', '', '', 3, CURRENT_TIMESTAMP, 3, CURRENT_TIMESTAMP);
INSERT INTO cr_section
              VALUES (NULL, 'bbox_comments', 'Comments', 'BBox','317', CURRENT_TIMESTAMP);
